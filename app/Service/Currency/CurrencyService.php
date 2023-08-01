<?php

namespace App\Service\Currency;

use GuzzleHttp\Client;
use App\Service\Currency\Provider\Repository\CurrencyRepository;

class CurrencyService
{
    public function __construct(private readonly CurrencyRepository $repository) {}

    public function getCurrenciesData(): mixed
    {
        $client = new Client();
        $apiResponse = $client->get('http://apilayer.net/api/live?access_key=c2835002cdd0fc5999579654861ca609&currencies=EUR,GBP,JPY&source=USD&format=1');

        return json_decode($apiResponse->getBody()->getContents());
    }

    public function getCurrency(int $id)
    {
        return $this->repository->get($id);
    }

    public function storeOrder($order)
    {
        return $this->repository->savePurchase($order);
    }
}
