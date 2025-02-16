<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class SearchProduct extends Component
{
    public $query = '';
    public $products = [];

    public function updatedQuery()
    {
        $this->products = Product::where('name', 'like', '%' . $this->query . '%')
                            ->orWhere('barcode', 'like', '%' . $this->query . '%')
                            ->get();
    }

    public function selectProduct($id)
    {
        $product = Product::find($id);
        $this->emit('productSelected', $product);
        $this->reset('query', 'products');
    }

    public function render()
    {
        return view('livewire.search-product');
    }
}
