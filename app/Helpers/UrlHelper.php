<?php


namespace App\Helpers;


use Carbon\Carbon;
use Illuminate\Support\Str;

class UrlHelper
{
    /**
     * @param $url
     * @return string
     */
    public static function generateShortUrl($url)
    {
        return intval($url, 36);
    }

}
