<?php

namespace Ebizmarts\Recommendations\Filesystem;

interface WriterInterface
{
    public function open();

    public function put(array $data);

    public function close();

    public function fileExists();
}
