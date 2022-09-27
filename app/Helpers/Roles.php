<?php


namespace App\Helpers;


enum Roles: string
{
    case Admin = 'Admin';
    case Customer = 'Customer';

    public static function findByKey(string $key)
    {
        return constant("self::$key");
    }
}
