<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;


class CartController extends Controller
{
    //
    public function add(Request $r) {
        $r->validate([
            'post_id' => 'required|integer',
            'quantity' => 'required|integer'
        ]);

        $post = Post::find($r->post_id);

        \Cart::session(auth()->id())->add([
            'id' => $r->post_id,
            'name' => $post->title,
            'price' => 9.99,
            'quantity' => $r->quantity,
            'attributes' => [],
            'associatedModel' => $post
        ]);


        $items = \Cart::getContent();
        return redirect()->route('dashboard.cart.index', compact('items'));

    }

    public function update(Request $r) {
        $r->validate([
            'post_id' => 'required|integer',
            'quantity' => 'required|integer'
        ]);

        \Cart::session(auth()->id())->update($r->post_id, [
            'quantity' => [
                'relative' => false,
                'value' => $r->quantity
            ]
        ]);


        $items = \Cart::getContent();

        // dd($items);
        return redirect()->route('dashboard.cart.index', compact('items'));
    }

    public function index() {
        $items = \Cart::session(auth()->id())->getContent();

        return view('dashboard.cart.index', compact('items'));
    }

    public function clear() {
        \Cart::session(auth()->id())->clear();

        return redirect()->route('dashboard.cart.index');
    }

    public function checkout() {
        $items = \Cart::session(auth()->id())->getContent();

        $totalPrice  = \Cart::session(auth()->id())->getTotal();
        $totalQuantity = \Cart::session(auth()->id())->getTotalQuantity();

        $webhookurl = env("MOLLIE_LOCAL_WEBHOOK_DOMAIN") . route('webhooks.mollie', [], false);

        if(config('app.env') == 'local') {
            $webhookurl = env("MOLLIE_LOCAL_WEBHOOK_DOMAIN") . route('webhooks.mollie', [], false);
        } else {
            $webhookurl = route('webhooks.mollie');
        }

        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => (string) $totalPrice // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            "description" => "Order #12345",
            "redirectUrl" => route('dashboard.cart.payment'),
            "webhookUrl" => $webhookurl,
            "metadata" => [
                "order_id" => "12345",
            ],
        ]);
        
        return redirect($payment->getCheckoutUrl(), 303);
    }

    public function payment() {
        return 'Payment successful!';
    }
}
