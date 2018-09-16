<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Donation POST endpoint to handle BAKD donations.
     *
     * @param  Request  $request
     * @return Response
     */
    public function donate(Request $request)
    {
        $status = 'success';
        $message = 'Thank you for your donation, we truly appreciate the support!';

        return response()->json([
            'status'  => $status, 
            'message' => $message
        ]);
    }
}
