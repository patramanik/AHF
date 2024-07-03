<?php

namespace App\Http\Controllers;

use App\Models\FlatA;
use App\Models\FlatB;
use App\Models\FlatC;
use App\Models\FlatD;
use App\Models\Billreport;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index($id)
    {
        $models = [
            'flatA' => FlatA::class,
            'flatB' => FlatB::class,
            'flatC' => FlatC::class,
            'flatD' => FlatD::class,
        ];

        $flat = null;
        foreach ($models as $modelClass) {
            $flat = $modelClass::find($id);
            if ($flat !== null) {
                break;
            }
        }

        if ($flat === null) {
            return response()->view('errors.404', [], 404); // or any other error handling
        }
        $flat_id = $flat->flat_no;
        $billReport = Billreport::where('flat_no',$flat_id)->first();

        if ($billReport === null) {
            return response()->view('errors.404', [], 404); // or any other error handling
        }
        $currentDate = date('d-m-y');
        $total = $flat->monthly_rate + $flat->maintenance_charges + $flat->collection_for_major_maintenance;

        return view('bill')->with([
            'flats' => $flat,
            'billid' => $billReport->billorderid,
            'billdate' => $currentDate,
            'total' => $total,
            'billreport' => $billReport,
        ]);
    }

    public function bill($id)
    {
        $models = [
            'flatA' => FlatA::class,
            'flatB' => FlatB::class,
            'flatC' => FlatC::class,
            'flatD' => FlatD::class,
        ];

        $flat = null;
        foreach ($models as $modelClass) {
            $flat = $modelClass::find($id);
            if ($flat !== null) {
                break;
            }
        }

        if ($flat === null) {
            return response()->view('errors.404', [], 404); // or any other error handling
        }
        $flat_id = $flat->flat_no;
        $billReport = Billreport::where('flat_no',$flat_id)->first();

        if ($billReport === null) {
            return response()->view('errors.404', [], 404); // or any other error handling
        }
        $currentDate = date('d-m-y');
        $total = $flat->monthly_rate + $flat->maintenance_charges + $flat->collection_for_major_maintenance;

        return view('bill')->with([
            'flats' => $flat,
            'billid' => $billReport->billorderid,
            'billdate' => $currentDate,
            'total' => $total,
            'billreport' => $billReport,
        ]);
    }
}
