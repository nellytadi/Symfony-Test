<?php

namespace App\Service\Product;

interface FileReaderInterface {
    public function read(string $filePath): string;
}
