<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Service\Currency\CurrencyService;

class CurrenciesController extends Controller
{
    public function __construct(private readonly CurrencyService $service) {}

    public function list()
    {
        return view('components/currenciesList', [
            'currencies' => DB::table('currency')->get()
        ]);
    }

    public function getCurrency(int $id)
    {
        return view('components/conversion', [
            'currency' => $this->service->getCurrency($id)
        ]);
    }
}
