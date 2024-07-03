<?php

namespace App\Http\Controllers;

use App\Models\FlatA;
use App\Models\FlatB;
use App\Models\FlatC;
use App\Models\FlatD;
use App\Models\Billreport;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function Dashboard()
    {

        $flatA= FlatA::count();
        $flatB= FlatB::count();
        $flatC= FlatC::count();
        $flatD= FlatD::count();
        $count= $flatA+$flatB+$flatC+$flatD;

        $billdata=Billreport::count();
        // $pendingBills = Billreport::where('status', 0)->count();
        $pendingPayment = Billreport::where('bill_pament_status', 0)->count();


        return view('dashboard', [
            'count' => $count,
            'billdata' => $billdata,
            'pendingBills' => $pendingPayment
        ]);
    }

    public function sendEmail()
    {
        $data = Billreport::all();
        return view('email-send',['data' => $data]);
    }

    public function getsendEmaildata(){

        $data = Billreport::all();

        return view('paydingPay', ['data' => $data]);
    }

    public function paymentData(){

        $data = Billreport::all();

        return view('', ['data' => $data]);
    }
}
