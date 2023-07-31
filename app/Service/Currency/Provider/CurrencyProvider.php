<?php

namespace App\Service\Currency\Provider;

use Illuminate\Database\Eloquent\Model;

interface CurrencyProvider
{
    public function getList(): array;

    public function get(int $id): object;

    public function updateCurrencies($data);

}
