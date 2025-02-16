<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function createSale($sale){
        $ticket = Ticket::create([
            'user_id' => $sale->user_id,
            'client_id' =>$sale->client_id,
            'sale_id' => $sale->id,
        ]);
    }
}
