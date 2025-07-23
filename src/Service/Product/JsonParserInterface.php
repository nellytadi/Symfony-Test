<?php

namespace App\Service\Product;

interface JsonParserInterface {
    public function parse(string $json): array;
}
