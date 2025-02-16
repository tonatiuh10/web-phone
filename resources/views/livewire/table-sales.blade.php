<div class="d-flex">
    <div class="card w-100 table-responsive me-1" style="height: 50vh; overflow-y: auto; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">      
        <table class="table table-striped-columns">
            <thead class="table-dark text-start align-content-center position-sticky" style="z-index: 5;">
                <tr>
                    <th scope="col" style="width: 10%;">Cant.</th>
                    <th scope="col">Producto</th>
                    <th scope="col" style="width: 15%">Precio</th>
                    <th scope="col" style="width: 15%">Sub-total</th>
                    <th scope="col" style="width: 10%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($selectedProducts as $product)
                    <tr>
                        <td>{{ $product['quantity'] }}</td>
                        <td>{{ $product['name'] }}</td>
                        <td>$ {{ $product['price'] }}</td>
                        <td>$ {{ $product['price']*$product['quantity']}}</td>
                        <td class="text-center text-nowrap">
                            <button class="btn p-0 mx-1" wire:click="removeItem({{ $loop->index }})" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-dash-circle-fill text-body-tertiary" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1z"/>
                                </svg>
                            </button>
                            <button class="btn p-0 mx-1" wire:click="removeSelected({{ $loop->index }})">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash3-fill text-danger" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                </svg>
                            </button>
                        </td>                     
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>