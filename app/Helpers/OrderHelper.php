
<?php

use Illuminate\Support\Str;


class OrderHelper
{
    public static function generateOrderId($length = 10)
    {
        return strtoupper(Str::random($length));
    }
}
