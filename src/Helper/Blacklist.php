<?php

namespace App\Helper;

class Blacklist
{
    const BLACKLISTED_CATEGORIES =  [
        "Gardening Tools",
        "Sustainable Living",
        "Pet Supplies"
    ];

    public static function getCategories(): array
    {
        return self::BLACKLISTED_CATEGORIES;
    }
}
