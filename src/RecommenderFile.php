<?php
/**
 * Created by PhpStorm.
 * User: pablo
 * Date: 2/3/17
 * Time: 11:52 AM
 */

namespace Ebizmarts\Recommendations;

use Ebizmarts\Recommendations\RecommenderException;

class RecommenderFile
{

    public function __construct(
        \Ebizmarts\Recommendations\Filesystem\CsvWriter $csvWriter
    )
    {
        $this->writer = $csvWriter;
    }

    public function writeToCsv(array $data)
    {
        $totalRecords = count($data);

        if ($totalRecords === 0) {
            throw new \InvalidArgumentException("Empty data provided");
        }

        $openResult = $this->writer->open();

        if ($openResult === false) {
            throw new RecommenderException("Could not open file.");
        }

        $this->writeDataToCsv($data);

        $this->writer->close();

        return true;
    }

    private function writeDataToCsv($csvData)
    {
        return array_map(function ($item) {
            $this->writer->put($item->__toArray());
        }, $csvData);
    }
}
