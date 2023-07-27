<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CurrenciesController extends Controller
{
    public function list()
    {
        return view('components/currenciesList', [
            'currencies' => DB::table('currency')->get()
        ]);
    }
}
