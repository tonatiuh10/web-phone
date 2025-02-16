<?php

namespace App\Http\Livewire;
use Picqer\Barcode\BarcodeGeneratorHTML;

use Livewire\Component;
use App\Models\Ticket;
use App\Models\DetailsSale;
use App\Models\Sale;
use App\Models\Service;
use App\Models\Product;
use App\Models\User;
use App\Models\Client;

class SearchTicket extends Component
{
    public $query = '';
    public $ticket;
    public $seller;
    public $client;
    public $service;
    public $sale=[];
    public $tickets = [];
    public $barcode;
    public $saleTotal=0;

    public function updatedQuery()
    {
        $this->tickets = Ticket::where('id', 'like', '%' . $this->query . '%')
                            ->get();
    }

    public function selectTicket($id)
    {
        $this->ticket = Ticket::find($id);
        $this->seller=User::find($this->ticket->user_id);
        $this->client=Client::find($this->ticket->client_id);
        if($this->ticket->sale_id){
            $this->sale = DetailsSale::select(
                'details_sale.*', 
                'products.name as product_name',
            )
            ->join('products', 'details_sale.product_id', '=', 'products.id')
            ->where('details_sale.sale_id', $this->ticket->sale_id)
            ->get();
            $this->totalSale=Sale::where('id',$this->ticket->sale_id)->value('total');
        }else{
            $this->service=Service::where($this->ticket->service_id);
        }
        $this->createBarcode($id);

        $this->reset('query', 'tickets');
    }

    public function createBarcode($id){
        $generator = new BarcodeGeneratorHTML();
        $this->barcode = $generator->getBarcode($id, $generator::TYPE_EAN_13,4,50);
    }

    public function render()
    {
        return view('livewire.search-ticket');
    }
}
