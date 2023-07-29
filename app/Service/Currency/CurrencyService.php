<?php

namespace App\Service\Currency;

use GuzzleHttp\Client;

class CurrencyService
{
    public function getCurrenciesData(): mixed
    {
        $client = new Client();
        $apiResponse = $client->get('http://apilayer.net/api/live?access_key=c2835002cdd0fc5999579654861ca609&currencies=EUR,GBP,JPY&source=USD&format=1');

        return json_decode($apiResponse->getBody()->getContents());
    }

}
