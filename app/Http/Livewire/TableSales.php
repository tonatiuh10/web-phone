<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\DetailsSale;
use Illuminate\Support\Facades\DB;


class TableSales extends Component
{
    public $selectedProducts = []; 
    protected $listeners = [
        'productSelected' => 'productSelected',
        'removeProducts' => 'removeProducts',
        'removeItem' => 'removeItem',
        'createSaleDetails' => 'createSaleDetails',
    ]; 

    public function productSelected($product)
    {
        if (!collect($this->selectedProducts)->contains('barcode', $product['barcode'])) {
            $product['quantity'] = 1;
            $this->selectedProducts[] = $product;
        } else {
            foreach ($this->selectedProducts as &$selectedProduct) {
                if ($selectedProduct['barcode'] === $product['barcode']) {
                    $selectedProduct['quantity'] += 1;
                }
            }
        }
        $this->emit('addProduct', $product);
    }

    public function removeSelected($index)
    {
        $this->emit('removeSelected', $this->selectedProducts[$index]);
        unset($this->selectedProducts[$index]);
        $this->selectedProducts = array_values($this->selectedProducts);
    }

    public function removeProducts()
    {    
        $this->selectedProducts=[];
    }

    public function removeItem($index){
        if ($this->selectedProducts[$index]['quantity']>1){
            $this->selectedProducts[$index]['quantity']--;
            $this->emit('updateItem',$this->selectedProducts[$index]['price']);
        }else{
            $this->removeSelected($index);
        }
    }

    public function createSaleDetails($idSale){
        foreach($this->selectedProducts as $product){
            $qty=$product['quantity'];

            DB::table('details_sale')->insert([
                'sale_id' => $idSale,
                'product_id' => $product['id'],
                'qty' => $qty,
                'unit_price' => $product['price'],
                'subtotal' => $product['price']*$qty,
                'discount' => isset($product['discount']) ? $product['discount'] : 0
            ]);
        }
    }

    public function render()
    {
        return view('livewire.table-sales');
    }
}
