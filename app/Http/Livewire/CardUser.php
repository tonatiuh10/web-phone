<?php

namespace App\Http\Livewire;
use App\Models\Sale;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class CardUser extends Component
{
    public $sales=0;
    public $services=0;
    public $income=0;

    protected $listeners=[
        'updateCardUser'=>'updateCardUser',
    ];

    public function updateCardUser(){
        $this->sales = Sale::where('user_id', Auth::id())
                       ->whereBetween('created_at', [Carbon::today(), Carbon::tomorrow()])
                       ->count();

        $this->income = Sale::where('user_id', Auth::id())
                      ->whereBetween('created_at', [Carbon::today(), Carbon::tomorrow()])
                      ->sum('total');
        
        $this->services = Service::where('user_id', Auth::id())
                      ->whereBetween('created_at', [Carbon::today(), Carbon::tomorrow()])
                      ->count();       
                     
        $this->income += Service::where('user_id', Auth::id())
                      ->whereBetween('created_at', [Carbon::today(), Carbon::tomorrow()])
                      ->sum('final_price');     
    }

    public function mount(){
        $this->updateCardUser();
    }

    public function render()
    {
        return view('livewire.card-user');
    }
}
