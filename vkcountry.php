<?php

class Vk
{
    public static function getCountry()
    {
        $url = "https://api.vk.com/method/database.getCountries";
        $params = [
            'need_all' => 1,
            'offset' => 0,
            'count' => 500,
            'v' => '5.64',
        ];

       return json_decode(Request::post($url, $params));
    }

}