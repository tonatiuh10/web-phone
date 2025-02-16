<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryMovement extends Model
{
    use HasFactory;

    protected $guarded=[
        'id_user',
        'id_product',
        'id_sale',
        'id_service',
        'movement_type',
        'qty',
        'date',
        'reason',
    ];
}
