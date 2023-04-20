<?php

namespace App\Factories;

use Illuminate\Support\Facades\DB;

class DatabaseFactory
{
    public static function getConnection($connectionName)
    {
        return DB::connection($connectionName);
    }
}