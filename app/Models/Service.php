<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded=[
            'id_user',
            'id_technical',
            'id_client',
            'marca',
            'model',
            'IMEI',
            'details',
            'problem',
            'diagnostic',
            'estimate_price',
            'final_price',
            'entry_date',
            'delivery_date',
            'note',
            'status',
    ];
}
