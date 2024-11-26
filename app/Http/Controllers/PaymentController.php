<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PaymentMethod;
use App\Models\Transaction;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{
    //

    public function processPayment(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $charge = Charge::create([
            'amount' => $request->amount * 100,
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'description' => 'Payment for order',
        ]);

        Transaction::create([
            'payment_method_id' => $request->payment_method_id,
            'amount' => $request->amount,
            'status' => $charge->status,
        ]);

        return redirect()->back()->with('success', 'Payment successful!');
    }
}
