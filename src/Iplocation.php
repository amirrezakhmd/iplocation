<?php

namespace Amirjeyz\Iplocation;

use Illuminate\Support\Facades\Http;

class Iplocation
{
    public static function api()
    {
        $ip = Iplocation::getUserIp();
        $client = Http::get('http://api.ipstack.com/'. $ip , [
            'access_key' => config('iplocation.api')
        ]);
        return $client;
    }

    public static function getUserIp() {
        return Http::get('https://api.ipify.org');
    }

    public static function all()
    {
        $client = Iplocation::api();
        return $client->json();
    }


    public static function getUserCountry()
    {
        $client = Iplocation::api();
        return $client['country_name'];
    }

    public static function getUserCity()
    {
        $client = Iplocation::api();
        return $client['city'];
    }

    public static function getUserLanguage()
    {
        $client = Iplocation::api();
        return $client['location']['languages'];
    }

    public static function getUserCountryFlag()
    {
        $client = Iplocation::api();
        return $client['location']['country_flag_emoji'];
    }

    public static function getUserProvince()
    {
        $client = Iplocation::api();
        return $client['region_name'];
    }

    public static function getUserCallingCode()
    {
        $client = Iplocation::api();
        return $client['calling_code'];
    }

    public static function getUserCountryCode()
    {
        $client = Iplocation::api();
        return $client['location']['calling_code'];
    }
}
