<?php

namespace Ebizmarts\Recommendations\Filesystem;

class CsvWriter implements WriterInterface
{
    private $resource;

    /** @var string */
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    /**
     * @return resource|bool
     */
    public function open()
    {
        $this->resource = fopen($this->filename, "a+");
        return $this->resource;
    }

    /**
     * @return int|bool
     * @param array $data
     */
    public function put(array $data)
    {
        return fputcsv($this->resource, $data, ",", '"', "\\");
    }

    /**
     * @return bool
     */
    public function close()
    {
        return fclose($this->resource);
    }

    /**
     * @return bool
     */
    public function fileExists()
    {
        return file_exists($this->filename);
    }
}
