<?php

namespace App\Http\Controllers;

use App\Models\FlatA;
use App\Models\FlatB;
use App\Models\FlatC;
use App\Models\FlatD;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\PaymentLinkEmail;
use Illuminate\Support\Facades\Mail;

class EmailControllers extends Controller
{
    public function sendPaymentEmail()
    {
        $sendMessage = 'Welcome to AHF';

        // Get email and flat_no from each flat model
        $flatBOwners = FlatB::select('email', 'id')->get();
        $flatCOwners = FlatC::select('email', 'id')->get();
        $flatAOwners = FlatA::select('email', 'id')->get();
        $flatDOwners = FlatD::select('email', 'id')->get();

        // Combine all owners into one collection
        $allOwners = $flatAOwners->merge($flatBOwners)->merge($flatCOwners)->merge($flatDOwners);

        // Send the email to each owner
        foreach ($allOwners as $owner) {
            $paymentLink = url('/payment/' .$owner->id); // Generate payment link using flat_no
            $subject = 'Payment Link: ' . $paymentLink;
           $respons= Mail::to($owner->email)->send(new PaymentLinkEmail($sendMessage, $subject));
        }

        $orderId = strtoupper(Str::random(10));

        // dd($respons);
        // return response()->json(['message' => 'Emails sent successfully.']);
    }
}
