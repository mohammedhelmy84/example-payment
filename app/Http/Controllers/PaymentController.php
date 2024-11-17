<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Omnipay\Omnipay;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    private $gateway;
    public function __construct() {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function create(){
        return view('payments.create');
    }

    public function pay(Request $request)
    {
        try {

            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ))->send();

            if ($response->isRedirect()) {
                $response->redirect();
            }
            else{
                return $response->getMessage();
            }

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }


}
