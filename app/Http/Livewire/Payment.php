<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Payment extends Component
{
    public $change=0;
    public $total=0;
    public $mount=0;

    protected $listeners = [
        'updateTotal' => 'updateTotal',
    ];

    public function updateTotal($total){
        $this->total=$total;
    }

    public function updateChange(){
        $this->change=(int)$this->mount-(int)$this->total;
    }

    public function render()
    {
        return view('livewire.payment');
    }
}
