<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsSale extends Model
{
    use HasFactory;
    protected $table = 'details_sale';

    protected $fillable=[
        'id_sale',
        'id_product',
        'qty',
        'unit_price',
        'subtotal',
        'discount',
    ];
}
