<div class="w-100">
    <input type="text" wire:model="query" wire:model.debounce.100ms="query" class="form-control" placeholder="Buscar producto">

    <div class="mt-1 ">
        @if(!empty($query))
            @if (count($products) > 0)
                <ul class="list-group position-absolute table-responsive" style="height:300px; z-index: 10;">
                    @foreach ($products as $product)
                        <li class="list-group-item list-group-item-action" wire:click="selectProduct({{ $product->id }})">
                            {{ $product->name }}
                        </li>
                    @endforeach
                </ul>
            @endif
        @endif
    </div>
</div>
