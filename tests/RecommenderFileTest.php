<?php

namespace Ebizmarts\Recommendations;

class RecommenderFileTest extends \PHPUnit_Framework_TestCase
{
    public function testDataWrittenToCsv()
    {
        $arrayData = [
            "ItemId"       => "1",
            "ItemName"     => "asdas",
            "ItemCategory" => "rotoo",
            "Description"  => "Prueba",
            "FeaturesList" => "qwe1,oooo,ploliu",
        ];

        $csvWriterMock = $this->getMockBuilder(\Ebizmarts\Recommendations\Filesystem\CsvWriter::class)
            ->setConstructorArgs(["./prueba.csv"])
            ->getMock();
        $csvWriterMock
            ->expects($this->once())
            ->method('open')
            ->willReturn(true);
        $csvWriterMock
            ->expects($this->once())
            ->method('close')
            ->willReturn(true);
        $csvWriterMock
            ->expects($this->once())
            ->method('put')
            ->with($arrayData)
            ->willReturn(89);

        $object = new \Ebizmarts\Recommendations\RecommenderFile(
            $csvWriterMock
        );

        $catalogItemMock = $this->getMockBuilder(\Ebizmarts\Recommendations\Data\V4_0\CatalogItem::class)
            ->disableOriginalConstructor()->getMock();
        $catalogItemMock->expects($this->once())->method('__toArray')->willReturn($arrayData);

        $this->assertTrue($object->writeToCsv([$catalogItemMock]));
    }
}
