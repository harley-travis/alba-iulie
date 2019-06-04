<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\User;
use Illuminate\Session\Store;
use Illuminate\Http\Request;

class BillingController extends Controller {
    

    public function index() {
        return view('billing.overview');
    }

    public function createCustomer(Store $session) {

        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        $token = $_POST['stripeToken'];

        $user = User::find(Auth::user()->id);

        $customer = \Stripe\Customer::create([
            'name' => $user->name,
            'email' => $user->email,
            'source' => $token,
        ]);
        
        $user->stripe_id = $customer->id;
        $user->save();

        /**
         * FUTURE REFERENCE:
         * Stripe does not show the plan ID, which is tied to the product.
         * I found this by exporting the product data and opening it in excel
         */

        $subscription = \Stripe\Subscription::create([
            'customer' => $user->stripe_id,
            'items' => [['plan' => 'plan_FBTp293i4AKiuy']],
        ]);

        return redirect()
            ->back()
            ->with('info', 'Your payment was successful!');

    }

    public function getInvoices() {

    }

    public function addCard() {

    }

    public function removeCard() {

    }

    public function updateCard() {
        
    }

    public function addACH() {

    }

    public function removeACH() {

    }

}
