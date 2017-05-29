<?php

class Request
{

    public static function post($url, $params)
    {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $res = curl_exec ($ch);
            if (!$res) {
                $res = curl_error($ch);
            }

            curl_close ($ch);
        
             return $res;
    }

}