<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Mollie\Laravel\Facades\Mollie;

class WebhookController extends Controller
{
    public function handle(Request $request) {

        $paymentId = $request->input('id');
        $payment = Mollie::api()->payments->get($paymentId);

        Log::info('Payment status: ' . $payment->status);
        if ($payment->isPaid())
        {
            echo 'Payment received.';
            // Do your thing ...
        }

    }
}
