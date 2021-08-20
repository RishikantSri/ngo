<?php

namespace App\Http\Controllers;
use App\Models\Donation;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use Illuminate\Support\Facades\Mail;

class PaypalController extends Controller
{
    protected $provider;

    public $amount;
    
    public function __construct() {
        $this->provider = new ExpressCheckout();
     
        
    }

    public function expressCheckout(Request $request) {
        
        
        $amount = $request->input('amount', false) ?$request->input('amount', false)  : '11';
        $this->amount = $amount;
        // dd($this->amount);
        // check if payment is recurring
        $recurring = $request->input('recurring', false) ? true : false;
        // get new Donation id
        $Donation_id = Donation::count() + 1;
        // Get the cart data
        $cart = $this->getCart($recurring, $Donation_id, $amount);
      
     
        $Donation = new Donation();
        $Donation->title = $cart['invoice_description'];
        $Donation->price = $cart['total'];
        $Donation->save();
      
       
        $response = $this->provider->setExpressCheckout($cart, $recurring);
      
      
        if (!$response['paypal_link']) {
          return redirect('/')->with(['code' => 'danger', 'donationmessage' => 'Something went wrong with PayPal']);
         
        }
      
     
        return redirect($response['paypal_link']);
      }



      private function getCart($recurring, $invoice_id, $amount)
      {

        if ($recurring) {
            return [
                'items' => [
                    [
                        'name' => 'invoice ' . config('paypal.invoice_prefix') . ' #' . $invoice_id,
                        'price' => $amount,
                        'qty' => 1,
                    ],
                ],

                'return_url' => url('/paypal/express-checkout-success?recurring=1'),
                'subscription_desc' => 'Monthly Donation Subscription ' . config('paypal.invoice_prefix') . ' #' . $invoice_id,
                'invoice_id' => config('paypal.invoice_prefix') . '_' . $invoice_id,
                'invoice_description' => "invoice #". $invoice_id ." invoice",
                'cancel_url' => url('/'),
                'total' => $amount, 
            ];
        }

        return [
            'items' => [
                [
                    'name' => 'invoice ',
                    'price' => $amount,
                    'qty' => 1,
                ],
               
            ],

            'return_url' => url('/paypal/express-checkout-success'),
            'invoice_id' => config('paypal.invoice_prefix') . '_' . $invoice_id,
            'invoice_description' => "Order #" . $invoice_id . " invoice",
            'cancel_url' => url('/'),
            'total' => $amount,
        ];
    }



    public function expressCheckoutSuccess(Request $request) {

        // check if payment is recurring
        $recurring = $request->input('recurring', false) ? true : false;
        $token = $request->get('token');
        $PayerID = $request->get('PayerID');

        $response = $this->provider->getExpressCheckoutDetails($token);

        if (!in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            return redirect('/')->with(['code' => 'danger', 'donationmessage' => 'Error processing PayPal payment']);
        }
        $invoice_id = explode('_', $response['INVNUM'])[1];

        $cart = $this->getCart($recurring, $invoice_id, '');

        if ($recurring === true) {
            
            $response = $this->provider->createMonthlySubscription($response['TOKEN'], $response['AMT'], $cart['subscription_desc']);
            
            $status = 'Invalid';
            if (!empty($response['PROFILESTATUS']) && in_array($response['PROFILESTATUS'], ['ActiveProfile', 'PendingProfile'])) {
                $status = 'Processed';
            }

        } else {

            $payment_status = $this->provider->doExpressCheckoutPayment($cart, $token, $PayerID);
          //  $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];
            $status = 'true';

        }

        $Donation = Donation::find($invoice_id);
        $Donation->payment_status = $status;
     
        if ($recurring === true) {
            $Donation->recurring_id = $response['PROFILEID'];
        }
        $Donation->save();

        if ($Donation->paid) {
            
        // email data
        $email_data = array(
             'email' => 'account4rishi@gmail.com',
             'name' => 'Rishikant',
            'amount' => $Donation->price  ,  // amount
        );

        // send email with the template
        Mail::send('frontend.layouts.email_donation', $email_data, function ($message) use ($email_data) {
            $message->to($email_data['email'], $email_data['name'])
                ->subject('Welcome to NGO')
                ->from('NGO@rishikantsri.tech', 'NGO: It Helps');
        });
            
        return redirect('/')->with(['code' => 'success', 'donationmessage' => 'Amount of' . $Donation->price . ' Donation ' . $Donation->id . ' has been paid successfully!']);
        }
        
        return redirect('/')->with(['code' => 'danger', 'donationmessage' => 'Error processing PayPal payment for Order ' . $Donation->id . '!']);
    }

      
    
}
