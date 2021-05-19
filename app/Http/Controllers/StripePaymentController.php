<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StripePaymentController extends Controller
{
    public function donate()
    {
        return view('backend.stripe.card', [
            'intent' => auth()->user()->createSetupIntent(),
        ]);
    }

    public function stripePost(Request $request)
    {
        $user          = auth()->user();
        $paymentMethod = $request->paymentMethod;
        try {
            $user->createOrGetStripeCustomer();
            $user->updateDefaultPaymentMethod($paymentMethod["id"]);
            $something = $user->charge(floatval($request->amount) * 100, $paymentMethod["id"]);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
        auth()->user()->update(['donation' => floatval($request->amount) + floatval(auth()->user()->donation)]);
        return $something;
    }
}
