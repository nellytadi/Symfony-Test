<?php

namespace App\Service\Product;

class JsonFileParser implements JsonParserInterface {
    public function parse(string $json): array {
        $data = json_decode($json, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException("JSON decode error: " . json_last_error_msg());
        }
        return $data;
    }
}
