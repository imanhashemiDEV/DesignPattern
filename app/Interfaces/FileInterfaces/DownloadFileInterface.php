<?php

namespace App\Interfaces\FileInterfaces;

interface DownloadFileInterface extends FileInterface
{
    public function download(): bool;
}
