<?php

namespace App\Service\Currency\Provider;

use Illuminate\Database\Eloquent\Model;

interface CurrencyProvider
{
    public function getList(): array;

    public function get(string $id): Model;

    public function updateCurrencies($data);

}
