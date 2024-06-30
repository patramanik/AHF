<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billreport extends Model
{
    use HasFactory;
    protected $table = 'billreport';

    protected $fillable = [
        'id',
        'flat_no',
        'bill_pament_status',
        'billdate',
        'billtime',
        'bill_send_date',
        'bill_send_time',
        'billorderid',
        'billsentstatus',
        'created_at',
        'updated_at',
    ];
}
