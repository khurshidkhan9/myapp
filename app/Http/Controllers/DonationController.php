<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Stripe;
use Session;


class DonationController extends Controller
{
    public function donationForm( Request $request ){
        $info = [];
        // return view( 'donation.form', $info );
        return view( 'donation.stripe_form', $info );
    }

    public function donationSuccess( Request $request ){
        $donation =  Donation::create($request->all());
        if($donation){

            return "Post has been created successfully!";
        }else {
            return "Post failed to create!";
        }
    }

    public function donationCancelled( Request $request ){
        dump( "Donation Cancelled" );
        dd( $request->all() );
    }

    public function donationNotify( Request $request ){
        dump( "Donation Notify" );
        dd( $request->all() );
    }

    public function alldonations()
    {
        $donation = Donation::all()->toArray();
        return array_reverse($donation);
    }

    public function destroy($id)
    {
        $donation = Donation::find($id);
        $donation->delete();

        return response()->json('donation deleted!');
    }


    // all method for stripe payment

        /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $request->amount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "customer" => "cus_L6KW1X9X1sDFB5",
                "description" => "Test payment from amin education foundation." 
        ]);
  
        Session::flash('success', 'Payment successful!');
          
        return back();
    }
}
