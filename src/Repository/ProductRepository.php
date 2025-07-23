<?php

namespace App\Repository;

use App\Service\Product\FileReaderInterface;
use App\Service\Product\JsonParserInterface;

class ProductRepository {
    private FileReaderInterface $reader;
    private JsonParserInterface $parser;

    private string $filePath;
    public function __construct(FileReaderInterface $reader, JsonParserInterface $parser, string $filePath) {
        $this->reader = $reader;
        $this->parser = $parser;
        $this->filePath = $filePath;
    }

    public function getAllProducts(): array {
        $json = $this->reader->read($this->filePath);
        $data = $this->parser->parse($json);

        return $data['products'] ?? [];
    }
}
