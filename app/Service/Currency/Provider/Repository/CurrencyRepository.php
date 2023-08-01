<?php

namespace App\Service\Currency\Provider\Repository;

use App\Models\Order;
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

        return (object)$currency[0]; // TO DO
    }

    public function savePurchase(array $data): void
    {
        $name = $data['name'];
        $currency = DB::select("Select * from currency where name like '%$name%'");

        foreach ($currency as $value) {
            $order = new Order();

            $order->currency_name = $value->name;
            $order->foreign_currency_purchased =  $data['name'];
            $order->exchange_rate =  $value->exchange_rate;
            $order->exchange_rate_for_foreign_currency = $value->exchange_rate;
            $order->surcharge_percentage =  $value->surcharge;
            $order->amount_paid_in_USD =  $data['amount'];
            $order->discount_percentage =  $value->discount;
            $order->amount_of_foreign_currency_purchased = $data['result'];
            $order->created_at = Carbon::now()->format('Y-m-d');

            $order->save();
        }
    }
}
