<?php

namespace App\Service\Currency\Provider\Repository;

use App\Service\Currency\Provider\CurrencyProvider;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CurrencyRepository implements CurrencyProvider
{
    public function updateCurrencies($data): int
    {
        $dateTime = Carbon::parse($data->timestamp)->format('Y-m-d H:i:s');
        $eur = $data->quotes->USDEUR;
        $gbp = $data->quotes->USDGBP;
        $jpy = $data->quotes->USDJPY;

        return DB::update("UPDATE currency
    SET exchange_rate =
        CASE
        WHEN name = 'Japanese Yen (JPY)' THEN '$jpy'
        WHEN name = 'British Pound (GBP)' THEN '$gbp'
        WHEN name = 'Euro (EUR)' THEN '$eur'
        END, updated_at = '$dateTime'

    WHERE name IN ('Japanese Yen (JPY)','British Pound (GBP)','Euro (EUR)')");
    }

    public function get(int $id): object
    {
        $currency =  DB::select('select * from currency where id = :id', ['id' => $id]);

        return (object)$currency[0];
    }

    public function getList(): array
    {
        // TODO: Implement getList() method.
    }
}
