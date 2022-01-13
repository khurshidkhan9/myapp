<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;


class DonationController extends Controller
{
    public function donationForm( Request $request ){
        $info = [];
        return view( 'donation.form', $info );
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
}
