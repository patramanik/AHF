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
        'billdate',
        'billtime',
        'billorderid',
        'billsentstatus',
        'created_at',
        'updated_at',
    ];
}
