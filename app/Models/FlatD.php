<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlatD extends Model
{
    use HasFactory;

    protected $table = 'flatD';

    protected $fillable =[
        'id',
        'flat_no',
        'owner_name',
        'email',
        'monthly_rate',
        'maintenance_charges',
        'collection_for_major_maintenance',
        'created_at',
        'updated_at',
    ];

}
