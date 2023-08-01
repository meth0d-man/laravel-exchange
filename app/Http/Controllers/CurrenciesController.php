<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
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

    public function savePurchase(Request $request): RedirectResponse
    {
        $formFields = $request->validate([
            'amount' => 'required',
            'name' => 'required',
            'result' => 'required'
        ]);

        $this->service->storeOrder($formFields);

        return redirect('/')->with('message', 'Order saved');
    }
}
