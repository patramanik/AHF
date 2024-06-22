<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PaymentLinkEmail;
use Illuminate\Support\Facades\Mail;


class EmailControllers extends Controller
{
    public function sendPaymentEmail(){
        $toEmail = 'manikpatra409@gmail.com';
        $sendMessage = 'wellcome to AHF';
        $subject = 'this is payment link';

        $response = Mail::to($toEmail)->send(new PaymentLinkEmail($sendMessage, $subject));

        dd($response);

    }
}
