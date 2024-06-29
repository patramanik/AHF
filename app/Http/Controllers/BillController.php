<?php

namespace App\Http\Controllers;

use App\Models\FlatA;
use App\Models\FlatB;
use App\Models\FlatC;
use App\Models\FlatD;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index($id)
    {
        $models = [
            'flateA' => FlatA::class,
            'flateB' => FlatB::class,
            'flateC' => FlatC::class,
            'flateD' => FlatD::class,
        ];

        foreach ($models as $viewVar => $modelClass) {
            $flat = $modelClass::find($id);
            // echo $flat;
            if ($flat !== null) {
                return view('bill')->with('flats',$flat);
            }
        }

        return response()->view('errors.404', [], 404); // or any other error handling
    }
}
