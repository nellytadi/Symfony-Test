<?php

namespace App\Service\Product;

class LocalFileReader implements FileReaderInterface {
    public function read(string $filePath): string {
        if (!file_exists($filePath)) {
            throw new \RuntimeException("File not found: $filePath");
        }

        $contents = file_get_contents($filePath);
        if ($contents === false) {
            throw new \RuntimeException("Unable to read file: $filePath");
        }

        return $contents;
    }
}
