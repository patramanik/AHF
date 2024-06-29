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
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmailControllers extends Controller
{
    public function sendPaymentEmail()
    {
        // $sendMessage = 'Welcome to AHF';
        $subject = 'Welcome to AHF';


        // Send the email to each owner and save bill data to database
        foreach ($allOwners as $owner) {
            $paymentLink = url('/payment/' . $owner->id); // Generate payment link using flat_no
            $sendMessage = 'Payment Link: ' . $paymentLink;
            $OrderId = mt_rand(1000000000, 9999999999);
            $billOrderId = 'OD' . $OrderId; // Generate random bill order ID
            $billDate = Carbon::now()->toDateString(); // Current date
            $billTime = Carbon::now()->toTimeString(); // Current time

            // Send email
            Mail::to($owner->email)->send(new PaymentLinkEmail($sendMessage, $subject));

            // Save to database
            DB::table('billreport')->update([
                'flat_no' => $owner->flat_no,
                'billdate' => $billDate,
                'billtime' => $billTime,
                'billorderid' => $billOrderId,
                'billsentstatus' => true, // Assuming email sending is successful
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        return redirect('dashboard')->with('message', 'Emails sent successfully.');

        // return response()->json(['message' => 'Emails sent successfully.']);

    }
    public function sendEmailA()
    {

        $subject = 'Welcome to AHF';

        // $flatBOwners = FlatB::select('email', 'id', 'flat_no')->get();
        // $flatCOwners = FlatC::select('email', 'id', 'flat_no')->get();
        $flatAOwners = FlatA::select('email', 'id', 'flat_no')->get();
        // $flatDOwners = FlatD::select('email', 'id', 'flat_no')->get();


        // Send the email to each owner and save bill data to database
        foreach ($flatAOwners as $owner) {
            $paymentLink = url('/payment/' . $owner->id); // Generate payment link using flat_no
            $sendMessage = 'Payment Link: ' . $paymentLink;
            $OrderId = mt_rand(1000000000, 9999999999);
            $billOrderId = 'OD' . $OrderId; // Generate random bill order ID
            $billDate = Carbon::now()->toDateString(); // Current date
            $billTime = Carbon::now()->toTimeString(); // Current time

            // Send email
            Mail::to($owner->email)->send(new PaymentLinkEmail($sendMessage, $subject));

            // Save to database
            DB::table('billreport')->update([
                'flat_no' => $owner->flat_no,
                'billdate' => $billDate,
                'billtime' => $billTime,
                'billorderid' => $billOrderId,
                'billsentstatus' => true, // Assuming email sending is successful
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        return redirect('dashboard')->with('message', 'Emails sent successfully.');

    }
    public function sendEmailB()
    {
        $subject = 'Welcome to AHF';

        $flatBOwners = FlatB::select('email', 'id', 'flat_no')->get();
        // $flatCOwners = FlatC::select('email', 'id', 'flat_no')->get();
        // $flatDOwners = FlatD::select('email', 'id', 'flat_no')->get();


        // Send the email to each owner and save bill data to database
        foreach ($flatBOwners as $owner) {
            $paymentLink = url('/payment/' . $owner->id); // Generate payment link using flat_no
            $sendMessage = 'Payment Link: ' . $paymentLink;
            $OrderId = mt_rand(1000000000, 9999999999);
            $billOrderId = 'OD' . $OrderId; // Generate random bill order ID
            $billDate = Carbon::now()->toDateString(); // Current date
            $billTime = Carbon::now()->toTimeString(); // Current time

            // Send email
            Mail::to($owner->email)->send(new PaymentLinkEmail($sendMessage, $subject));

            // Save to database
            DB::table('billreport')->update([
                'flat_no' => $owner->flat_no,
                'billdate' => $billDate,
                'billtime' => $billTime,
                'billorderid' => $billOrderId,
                'billsentstatus' => true, // Assuming email sending is successful
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        return redirect('dashboard')->with('message', 'Emails sent successfully.');
    }

    public function sendEmailC()
    {
        $subject = 'Welcome to AHF';

        $flatCOwners = FlatC::select('email', 'id', 'flat_no')->get();
        // $flatDOwners = FlatD::select('email', 'id', 'flat_no')->get();


        // Send the email to each owner and save bill data to database
        foreach ($flatCOwners as $owner) {
            $paymentLink = url('/payment/' . $owner->id); // Generate payment link using flat_no
            $sendMessage = 'Payment Link: ' . $paymentLink;
            $OrderId = mt_rand(1000000000, 9999999999);
            $billOrderId = 'OD' . $OrderId; // Generate random bill order ID
            $billDate = Carbon::now()->toDateString(); // Current date
            $billTime = Carbon::now()->toTimeString(); // Current time

            // Send email
            Mail::to($owner->email)->send(new PaymentLinkEmail($sendMessage, $subject));

            // Save to database
            DB::table('billreport')->update([
                'flat_no' => $owner->flat_no,
                'billdate' => $billDate,
                'billtime' => $billTime,
                'billorderid' => $billOrderId,
                'billsentstatus' => true, // Assuming email sending is successful
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        return redirect('dashboard')->with('message', 'Emails sent successfully.');
    }

    public function sendEmailD()
    {

        $subject = 'Welcome to AHF';

        $flatDOwners = FlatD::select('email', 'id', 'flat_no')->get();


        // Send the email to each owner and save bill data to database
        foreach ($flatDOwners as $owner) {
            $paymentLink = url('/payment/' . $owner->id); // Generate payment link using flat_no
            $sendMessage = 'Payment Link: ' . $paymentLink;
            $OrderId = mt_rand(1000000000, 9999999999);
            $billOrderId = 'OD' . $OrderId; // Generate random bill order ID
            $billDate = Carbon::now()->toDateString(); // Current date
            $billTime = Carbon::now()->toTimeString(); // Current time

            // Send email
            Mail::to($owner->email)->send(new PaymentLinkEmail($sendMessage, $subject));

            // Save to database
            DB::table('billreport')->update([
                'flat_no' => $owner->flat_no,
                'billdate' => $billDate,
                'billtime' => $billTime,
                'billorderid' => $billOrderId,
                'billsentstatus' => true, // Assuming email sending is successful
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        return redirect('dashboard')->with('message', 'Emails sent successfully.');

    }
}
