<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;

class InfoOrder extends Component
{
    public $valueDiscount=0;
    public $valuePercentage=0;
    public $note="Vacio";
    public $client;

    protected $listeners = [
        'updateDiscount' => 'updateDiscount',
        'updateNote' => 'updateNote',
        'shareClient'=>'orderClient',
    ];

    public function updateDiscount($value,$percentage){
        $this->valueDiscount=$value;
        $this->valuePercentage=$percentage;
    }

    public function updateNote($note){
        $this->note=$note;
    }

    public function orderClient($id){
        $this->client=Client::find($id);
    }

    public function render()
    {
        return view('livewire.info-order');
    }
}
