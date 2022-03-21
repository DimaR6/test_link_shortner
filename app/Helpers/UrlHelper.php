<?php


namespace App\Helpers;


use Carbon\Carbon;
use Illuminate\Support\Str;

class UrlHelper
{
    /**
     * @param $value
     * @return string
     */
    public static function generateShortUrl($value)
    {
        return str_pad($value, 20, '0', STR_PAD_LEFT);
    }

}
