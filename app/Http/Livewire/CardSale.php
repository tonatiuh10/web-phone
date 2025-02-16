<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Client;
use App\Models\Sale;
use Carbon\Carbon;
use App\Models\Ticket;

class CardSale extends Component
{
    protected $listeners = [
        'addProduct' => 'addProduct',
        'removeSelected' => 'removeSelected',
        'cancelSale' => 'cancelSale',
        'updateItem' => 'updateItem',
        'addDiscount' => 'addDiscount',
        'searchTicket' => 'searchTicket',
        'shareClient' => 'cardClient',
    ];

    public $totalSale=0;
    public $valueDiscount=0;
    public $valueNote="";
    public $client;

    public function updateTotal(){
        $this->emit('updateTotal',$this->totalSale);
    }

    public function addProduct($product)
    {
        $this->totalSale += $product['price'];
        $this->updateTotal();
    }
    
    public function removeSelected($product)
    {
        $this->totalSale -= $product['price']*$product['quantity'];
        $this->updateTotal();
    }

    public function cancelSale()
    {
        $this->totalSale = 0;
        $this->valueNote='';
        $this->valueDiscount=0;
        $this->client=NULL;
        $this->emit('removeProducts');
        $this->updateTotal();
    }

    public function updateItem($price){
        $this->totalSale -= $price;
        $this->updateTotal();
    }

    public function addDiscount(){
        $discount=$this->valueDiscount/100;
        $subtotal=$this->totalSale*$discount;
        $this->totalSale=$this->totalSale-$subtotal;
        $this->emit('updateDiscount',$subtotal,$this->valueDiscount);
        $this->updateTotal();
    }

    public function addNote(){
        $this->emit('updateNote',$this->valueNote);
    }

    public function addClient(){
        $this->emit('clientSelected');
    }

    public function cardClient($id){
        $this->client=Client::find($id);
    }

    public function createSale(){
        if(isset($this->client)){
            $sale = Sale::create([
                'user_id' => Auth()->user()->id,
                'client_id' =>$this->client->id,
                'total' => $this->totalSale,
                'date' => Carbon::now(),
                'status' => 'finished',
            ]);
        }else{
            $sale = Sale::create([
                'user_id' => Auth()->user()->id,
                'client_id' => '2',
                'total' => $this->totalSale,
                'date' => Carbon::now(),
                'status' => 'finished',
            ]);            
        }
        $this->emit('createSaleDetails',$sale->id);
        $this->emit('updateCardUser');
        $this->cancelSale();
    }

    public function render()
    {
        return view('livewire.card-sale');
    }
}
