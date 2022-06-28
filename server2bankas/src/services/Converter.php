<?php

namespace BankasV2;

//https://stackoverflow.com/questions/50921997/how-to-convert-currency-using-google-currency-api-in-php

class Converter
{
    public static function currency_convert($amount)
    {
        $url = 'https://api.exchangerate-api.com/v4/latest/EUR';
        $json = file_get_contents($url);
        $exp = json_decode($json);

        $convert = $exp->rates->UAH;

        return $convert * $amount;
    }
}
