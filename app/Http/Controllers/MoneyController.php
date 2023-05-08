<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class MoneyController extends Controller
{
    public function index()
    {
        return view('money.index');
    }

    public function earn(Request $r) {
        $r->validate([
            'name' => 'required|string|min:3|max:255',
            'amount' => 'required|numeric|min:1|max:10000',
        ]);

        $amount = $r->amount;
        // add to decimals and convert to string
        $amount = (string) number_format($amount, 2, '.', '');

        // if local
        $webhook_url = "https://e877-193-191-137-219.ngrok-free.app/webhooks/mollie";
        
        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => $amount // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            "description" => "Somebody (". $r->name . ") donated some money",
            "redirectUrl" => route('rich.thanks'),
            "webhookUrl" => $webhook_url,
            // "webhookUrl" => route('webhooks.mollie'),
            "metadata" => [
                "person" => $r->name,
            ],
        ]);

        return redirect($payment->getCheckoutUrl(), 303);

    
        // redirect customer to Mollie checkout page
    }
}
