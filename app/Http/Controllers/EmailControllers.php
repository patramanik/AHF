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
    private function sendEmails($flats)
    {
        $subject = 'Welcome to AHF';

        foreach ($flats as $owner) {
            $paymentLink = url('/payment/' . $owner->id); // Generate payment link
            $sendMessage = 'Payment Link: ' . $paymentLink;
            $billOrderId = 'OD' . time() . mt_rand(1000, 9999); // Generate random bill order ID
            $billDate = Carbon::now()->toDateString(); // Current date
            $billTime = Carbon::now()->toTimeString(); // Current time

            $billData = [
                'flat_no' => $owner->flat_no,
                'bill_send_date' => $billDate,
                'bill_send_time' => $billTime,
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
    }

    public function sendEmailA()
    {
        $flatAOwners = FlatA::select('email', 'id', 'flat_no')->get();
        $this->sendEmails($flatAOwners);

        return redirect('dashboard')->with('message', 'Emails sent successfully.');
    }

    public function sendEmailB()
    {
        $flatBOwners = FlatB::select('email', 'id', 'flat_no')->get();
        $this->sendEmails($flatBOwners);

        return redirect('dashboard')->with('message', 'Emails sent successfully.');
    }

    public function sendEmailC()
    {
        $flatCOwners = FlatC::select('email', 'id', 'flat_no')->get();
        $this->sendEmails($flatCOwners);

        return redirect('dashboard')->with('message', 'Emails sent successfully.');
    }

    public function sendEmailD()
    {
        $flatDOwners = FlatD::select('email', 'id', 'flat_no')->get();
        $this->sendEmails($flatDOwners);

        return redirect('dashboard')->with('message', 'Emails sent successfully.');
    }
}
