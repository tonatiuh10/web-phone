<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;

class SearchClient extends Component
{
    public $query='';
    public $clients=[];
    public $client;

    protected $listeners = [
        'clientSelected' => 'clientSelected',
    ];

    public function updatedQuery(){
        $this->clients = Client::where('name', 'like', '%' . $this->query . '%')
                            ->orWhere('email', 'like', '%' . $this->query . '%')
                            ->orWhere('phone', 'like', '%' . $this->query . '%')
                            ->get();
    }

    public function selectClient($id){
        $this->client=Client::find($id);
        $this->reset('query', 'clients');
    }

    public function clientSelected(){
        $this->emit('shareClient',$this->client->id);
    }

    public function render()
    {
        return view('livewire.search-client');
    }
}
