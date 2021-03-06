<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\User;
use App\PaymentDetail;
use Illuminate\Http\Response;
use Illuminate\Session\Store;
use Illuminate\Http\Request;

class BillingController extends Controller {
    

    public function index() {
        
        $user = User::find(Auth::user()->id);
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        $customer = \Stripe\Customer::retrieve($user->stripe_id);

        $cards = \Stripe\Customer::allSources(
            $user->stripe_id,
            [
                'object' => 'card',
            ]
        );

        $invoices = \Stripe\Invoice::all(
            [
                "limit" => 15,
                "customer" => $user->stripe_id,
            ]
        );

        $subscriptions = \Stripe\Subscription::all([
            "customer" => $user->stripe_id,

        ]);

        $bank_accounts = \Stripe\Customer::allSources(
            $user->stripe_id,
            [
              'limit' => 3,
              'object' => 'bank_account',
            ]
          );

        return view('billing.overview', [
            'bank_accounts' => $bank_accounts, 
            'customer' => $customer, 
            'user' => $user, 
            'cards' => $cards, 
            'invoices' => $invoices,
            'subscriptions' => $subscriptions,
        ]);
    }

    public function getPlan() {
        return view('billing.plan');
    }

    public function listPlan() {

        $user = User::find(Auth::user()->id);
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));


        /**
         * 
         * need to find the plan
         * 
         * need to create a function that will find the users plan and return the data
         * 
         * need to create functions for all the data and return those so i'm not copy/pasting a 
         * bunch of hte same code
         */

        $plan = \Stripe\Plan::retrieve('plan_FBTp293i4AKiuy');

    }

    public function getPayment() {
        return view('billing.payments');
    }

    public function createCustomer(Store $session, Request $request) {

        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
        $token = $request->request->get('stripeToken');
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
            'trial_period_days' => 14,
        ]);

        return redirect()
            ->back()
            ->with('info', 'Your payment was successful!');

    }

    public function getInvoices() {
        
        $user = User::find(Auth::user()->id);
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        \Stripe\Invoice::all(["limit" => 15]);

    }

    public function createCharge() {

        // NEED TO FIGURE OUT THE TRAIL DAY I NEED TO MAKE SURE IT WON'T ADD THE TRIAL PERIOD EVERY ATTEMPT TO PROCESS A CHARGE
        // ADD THE TAXES

        $user = User::find(Auth::user()->id);
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        $charge = \Stripe\Charge::create([
            'customer' => $user->stripe_id, 
            'items' => [['plan' => 'plan_FBTp293i4AKiuy']],
            'trial_period_days' => 14,
        ]);

        // if the payment was successful ? else return message

    }

    public function createCard(Request $request) {

        $user = User::find(Auth::user()->id);
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        $card = \Stripe\Customer::createSource(
            $user->stripe_id,
            [
                'card' => [
                    'number' => $request->input('number'),
                    'exp_month' => $request->input('month'),
                    'exp_year' => $request->input('year'),
                    'cvc' => $request->input('cvc'),
                ],
            ]
        );

        $cards = \Stripe\Customer::allSources(
            $user->stripe_id,
            [
                'object' => 'card',
            ]
        );

        $invoices = \Stripe\Invoice::all(
            [
                "limit" => 15,
                "customer" => $user->stripe_id,
            ]
        );

        $subscriptions = \Stripe\Subscription::all([
            "customer" => $user->stripe_id,

        ]);

        return redirect()
            ->route('billing.overview', [
            'user' => $user, 
            'cards' => $cards, 
            'invoices' => $invoices,
            'subscriptions' => $subscriptions,
        ])->with('info', 'Your card was added successfully!');                   

    }

    public function listCards($u) {

        $user = User::find(Auth::user()->id);
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        $cards = \Stripe\Customer::listSources(
            $user->stripe_id,
            [
                'limit' => 3,
                'object' => 'card',
              ]
        );

        return view('billing.overview', ['cards' => $cards]);
    }

    public function destroyCard($card) {

        $user = User::find(Auth::user()->id);
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        \Stripe\Customer::deleteSource(
            $user->stripe_id,
            $card
        );

        $cards = \Stripe\Customer::allSources(
            $user->stripe_id,
            [
                'object' => 'card',
            ]
        );

        $invoices = \Stripe\Invoice::all(
            [
                "limit" => 15,
                "customer" => $user->stripe_id,
            ]
        );

        $subscriptions = \Stripe\Subscription::all([
            "customer" => $user->stripe_id,

        ]);

        return redirect()
            ->route('billing.overview', [
            'user' => $user, 
            'cards' => $cards, 
            'invoices' => $invoices,
            'subscriptions' => $subscriptions,
        ])->with('info', 'Your card was successfully removed!');

    }

    public function viewUpdateCard($id, Request $request) {

        $user = User::find(Auth::user()->id);
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));    
        $customer = \Stripe\Customer::retrieve($user->stripe_id);

        //dd($customer);

        $card = $customer->sources->retrieve($id);

        return view('billing.UpdateCard', ['user' => $user, 'card' => $card]);
    }

    public function updateCard(Request $request) {

        $user = User::find(Auth::user()->id);
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        \Stripe\Customer::updateSource(
            $user->stripe_id,
            $request->input('number'),
            [
                'exp_month' => $request->input('month'),
                'exp_year' => $request->input('year'),
            ]
        );

        $cards = \Stripe\Customer::allSources(
            $user->stripe_id,
            [
                'object' => 'card',
            ]
        );

        $invoices = \Stripe\Invoice::all(
            [
                "limit" => 15,
                "customer" => $user->stripe_id,
            ]
        );

        $subscriptions = \Stripe\Subscription::all([
            "customer" => $user->stripe_id,

        ]);

        return redirect()
            ->route('billing.overview', [
            'user' => $user, 
            'cards' => $cards, 
            'invoices' => $invoices,
            'subscriptions' => $subscriptions,
        ])->with('info', 'Your card was successfully updated!');

    }

    public function setDefaultPaymentMethod($payment) {

        $user = User::find(Auth::user()->id);
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        $update = \Stripe\Customer::update(
            $user->stripe_id,
            [
              'default_source' => $payment,
            ]
        );

        $cards = \Stripe\Customer::allSources(
            $user->stripe_id,
            [
                'object' => 'card',
            ]
        );

        $invoices = \Stripe\Invoice::all(
            [
                "limit" => 15,
                "customer" => $user->stripe_id,
            ]
        );

        $subscriptions = \Stripe\Subscription::all([
            "customer" => $user->stripe_id,

        ]);

        return redirect()
            ->route('billing.overview', [
            'cards' => $cards, 
            'invoices' => $invoices,
            'subscriptions' => $subscriptions,
        ])->with('info', 'Your default payment has be set successfully!');

    }

    public function listPaymentMethods() {
        // USE THIS TO GRAB BOTH CC AND ACH ACCOUNTS
    }

    public function listACHAccounts() {

        $user = User::find(Auth::user()->id);
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        $bank_accounts = \Stripe\Customer::allSources(
            $user->stripe_id,
            [
              'limit' => 15,
              'object' => 'bank_account',
            ]
          );


    }

    public function createACH(Request $request) {

        /**
         * NEED TO FIND OUT ABOUT THE TOKENS AND HOW TO USE THEM. 
         * DO I ONLY USE THEM WHEN CREATING THE CUSTOMER?
         */

        /**
         * There is a work flow for adding an ACH Account
         * https://stripe.com/docs/ach#ach-payments-workflow
         * 
         * 1) they add the bank information
         * 2) stripe deposits 2 small amounts in their account 1-2 days
         * 3) they verify those deposit amounts
         * 4) authorize the account to be charged NEED TO CHECK THIS STEP
         * 5) charge the account
         * 
         * later you will want to be able to set a payment method as the default system. 
         */

        $user = User::find(Auth::user()->id);
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
        //$token = $request->request->get('stripeToken');

        $bank_account = \Stripe\Customer::createSource(
            $user->stripe_id,
          [
            'bank_account' => [
                'account_holder_name' => $request->input('account_holder_name'),
                'routing_number' => $request->input('routing_number'),
                'account_number' => $request->input('account_number'),
                'account_holder_type' => $request->input('account_holder_type'),
                'country' => 'US',
                'currency' => 'usd',     
            ],
          ]
        );

        // store payment details and consent
        $account_setup = new PaymentDetail([
            'name' => $user->name, 
            'consent' => $request->input('first_name'), 
            'ip' => request()->ip(), 
            'country' => 'US', 
            'frequency' , 
            'user_id' => $user->id, 
        ]);
        $account_setup->save(); 

        $customer = \Stripe\Customer::retrieve($user->stripe_id);

        $cards = \Stripe\Customer::allSources(
            $user->stripe_id,
            [
                'object' => 'card',
            ]
        );

        $invoices = \Stripe\Invoice::all(
            [
                "limit" => 15,
                "customer" => $user->stripe_id,
            ]
        );

        $subscriptions = \Stripe\Subscription::all([
            "customer" => $user->stripe_id,

        ]);

        return redirect()
            ->route('billing.overview', [
            'customer' => $customer, 
            'cards' => $cards, 
            'invoices' => $invoices,
            'subscriptions' => $subscriptions,
        ])->with('info', 'Your default payment has be set successfully!');
    }

    public function verifyACH(Request $request) {
        // REQUIRED IF ADDING ACH

        $user = User::find(Auth::user()->id);
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        // grab the bank account number

        $bank_account = \Stripe\Customer::retrieveSource(
            $user->stripe_id,
            'ba_1EhV38I9snLjUymF7188MI9B'
        );

        /**
         * SET UP 10 ATTEMPTS TO CHARGE THE ACCOUNT AND THEN BLOCK IT
         */

        // verify the account
        $bank_account->verify(
            ['amounts' => [
                    $request->input('deposit_one'), 
                    $request->input('deposit_two')
                ]
            ]
        );

        // DISPLAY LOGIC IF SUCCESS RETURN STATEMENT ELSE RETURN FALSE STATEMENT    
    }

    public function authorizeACH() {
        // REQUIRED IF ADDING ACH
        // https://support.stripe.com/questions/collect-ach-authorization-from-customers
    }

    public function destroyACH() {

        $user = User::find(Auth::user()->id);
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        \Stripe\Customer::deleteSource(
            $user->stripe_id,
            'ba_1EhV38I9snLjUymF7188MI9B'
        );

    }

    public function addTaxRate() {

    }

    public function desputeACHCharge() {

    }

    public function desputeCCCharge() {

    }

    public function addCoupon() {
        /**
         * THIS FUNCTION IS FOR ME ONLY
         * I NEED TO CREATE A SUPER ADMIN LEVEL PERMISSIONS (AND WHITEJULY EMPLOYEES) 
         * WHERE THIS DATA WOULD ONLY SHOW FOR ME
         * THEN GIVE THEM AN OPTION TO ADD THIS INFORMATION
         */
    }

}
