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
    public function sendEmailA()
    {
        $subject = 'Welcome to AHF';
        $flatAOwners = FlatA::select('email', 'id', 'flat_no')->get();

        foreach ($flatAOwners as $owner) {
            $paymentLink = url('/payment/' . $owner->id); // Generate payment link
            $sendMessage = 'Payment Link: ' . $paymentLink;
            $orderId = mt_rand(1000000000, 9999999999);
            $billOrderId = 'OD' . $orderId; // Generate random bill order ID
            $billDate = Carbon::now()->toDateString(); // Current date
            $billTime = Carbon::now()->toTimeString(); // Current time

            $billData = [
                'flat_no' => $owner->flat_no,
                'billdate' => $billDate,
                'billtime' => $billTime,
                'billorderid' => $billOrderId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            try {
                // Send email
                Mail::to($owner->email)->send(new PaymentLinkEmail($sendMessage, $subject));

                // Email sent successfully
                $billData['billsentstatus'] = true;
            } catch (\Exception $e) {
                // Handle the error if email sending fails
                $billData['billsentstatus'] = false;
                $billData['error_message'] = $e->getMessage();
            }

            // Update or insert to database
            DB::table('billreport')->updateOrInsert(
                ['flat_no' => $owner->flat_no], // Check existing record by flat_no
                $billData
            );
        }

        return redirect('dashboard')->with('message', 'Emails sent successfully.');
    }


    public function sendEmailB()
    {
        $subject = 'Welcome to AHF';
        $flatBOwners = FlatB::select('email', 'id', 'flat_no')->get();

        foreach ($flatBOwners as $owner) {
            $paymentLink = url('/payment/' . $owner->id); // Generate payment link
            $sendMessage = 'Payment Link: ' . $paymentLink;
            $orderId = mt_rand(1000000000, 9999999999);
            $billOrderId = 'OD' . $orderId; // Generate random bill order ID
            $billDate = Carbon::now()->toDateString(); // Current date
            $billTime = Carbon::now()->toTimeString(); // Current time

            $billData = [
                'flat_no' => $owner->flat_no,
                'billdate' => $billDate,
                'billtime' => $billTime,
                'billorderid' => $billOrderId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            try {
                // Send email
                Mail::to($owner->email)->send(new PaymentLinkEmail($sendMessage, $subject));

                // Email sent successfully
                $billData['billsentstatus'] = true;
            } catch (\Exception $e) {
                // Handle the error if email sending fails
                $billData['billsentstatus'] = false;
                $billData['error_message'] = $e->getMessage();
            }

            // Update or insert to database
            DB::table('billreport')->updateOrInsert(
                ['flat_no' => $owner->flat_no], // Check existing record by flat_no
                $billData
            );
        }

        return redirect('dashboard')->with('message', 'Emails sent successfully.');
    }

    public function sendEmailC()
    {
        $subject = 'Welcome to AHF';
        $flatCOwners = FlatC::select('email', 'id', 'flat_no')->get();

        foreach ($flatCOwners as $owner) {
            $paymentLink = url('/payment/' . $owner->id); // Generate payment link
            $sendMessage = 'Payment Link: ' . $paymentLink;
            $orderId = mt_rand(1000000000, 9999999999);
            $billOrderId = 'OD' . $orderId; // Generate random bill order ID
            $billDate = Carbon::now()->toDateString(); // Current date
            $billTime = Carbon::now()->toTimeString(); // Current time

            $billData = [
                'flat_no' => $owner->flat_no,
                'billdate' => $billDate,
                'billtime' => $billTime,
                'billorderid' => $billOrderId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            try {
                // Send email
                Mail::to($owner->email)->send(new PaymentLinkEmail($sendMessage, $subject));

                // Email sent successfully
                $billData['billsentstatus'] = true;
            } catch (\Exception $e) {
                // Handle the error if email sending fails
                $billData['billsentstatus'] = false;
                $billData['error_message'] = $e->getMessage();
            }

            // Update or insert to database
            DB::table('billreport')->updateOrInsert(
                ['flat_no' => $owner->flat_no], // Check existing record by flat_no
                $billData
            );
        }

        return redirect('dashboard')->with('message', 'Emails sent successfully.');
    }


    public function sendEmailD()
    {
        $subject = 'Welcome to AHF';
        $flatDOwners = FlatD::select('email', 'id', 'flat_no')->get();

        foreach ($flatDOwners as $owner) {
            $paymentLink = url('/payment/' . $owner->id); // Generate payment link
            $sendMessage = 'Payment Link: ' . $paymentLink;
            $orderId = mt_rand(1000000000, 9999999999);
            $billOrderId = 'OD' . $orderId; // Generate random bill order ID
            $billDate = Carbon::now()->toDateString(); // Current date
            $billTime = Carbon::now()->toTimeString(); // Current time

            $billData = [
                'flat_no' => $owner->flat_no,
                'billdate' => $billDate,
                'billtime' => $billTime,
                'billorderid' => $billOrderId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            try {
                // Send email
                Mail::to($owner->email)->send(new PaymentLinkEmail($sendMessage, $subject));

                // Email sent successfully
                $billData['billsentstatus'] = true;
            } catch (\Exception $e) {
                // Handle the error if email sending fails
                $billData['billsentstatus'] = false;
                $billData['error_message'] = $e->getMessage();
            }

            // Update or insert to database
            DB::table('billreport')->updateOrInsert(
                ['flat_no' => $owner->flat_no], // Check existing record by flat_no
                $billData
            );
        }

        return redirect('dashboard')->with('message', 'Emails sent successfully.');
    }

}
