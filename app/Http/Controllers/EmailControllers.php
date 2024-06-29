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
    public function sendPaymentEmail($fno)
    {
        $sendMessage = 'Welcome to AHF';

        // Get email and flat_no from each flat model
        $flatBOwners = FlatB::select('email', 'id', 'flat_no')->get();
        $flatCOwners = FlatC::select('email', 'id', 'flat_no')->get();
        $flatAOwners = FlatA::select('email', 'id', 'flat_no')->get();
        $flatDOwners = FlatD::select('email', 'id', 'flat_no')->get();

        if($fno== 1){
            $allOwners=$flatAOwners;
        }
        elseif($fno== 2){
            $allOwners=$flatBOwners;
        }
        elseif($fno== 3){
            $allOwners=$flatCOwners;
        }
        elseif($fno== 4){
            $allOwners=$flatDOwners;
        }
<<<<<<< HEAD

        // Combine all owners into one collection
        // $allOwners = $flatAOwners->merge($flatBOwners)->merge($flatCOwners)->merge($flatDOwners);

        // Send the email to each owner and save bill data to database
        foreach ($allOwners as $owner) {
            $paymentLink = url('/payment/' . $owner->id); // Generate payment link using flat_no
            $subject = 'Payment Link: ' . $paymentLink;
            $OrderId = mt_rand(1000000000, 9999999999);
            $billOrderId='OD'.$OrderId; // Generate random bill order ID
            $billDate = Carbon::now()->toDateString(); // Current date
            $billTime = Carbon::now()->toTimeString(); // Current time

            // Send email
            Mail::to($owner->email)->send(new PaymentLinkEmail($sendMessage, $subject));

            // Save to database
            DB::table('billreport')->insert([
                'flat_no' => $owner->flat_no,
                'billdate' => $billDate,
                'billtime' => $billTime,
                'billorderid' => $billOrderId,
                'billsentstatus' => true, // Assuming email sending is successful
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        return redirect('dashboard')->with('message','Emails sent successfully.');

        // return response()->json(['message' => 'Emails sent successfully.']);
=======
        echo "$respons";
        $orderId = strtoupper(Str::random(10));
        dd($orderId);

        return response()->json(['message' => 'Emails sent successfully.']);
>>>>>>> d026d86c7613df7002e8a7ae4ace663ddf4450af
    }
}
