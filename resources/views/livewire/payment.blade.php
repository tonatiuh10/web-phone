<div class="w-100">
    <div class="w-100 text-center">
        <h5 class="fw-bolder fs-1">Total: ${{$this->total}}</h5>
    </div>
    <div class="w-100 text-center">
        <p class="fw-semibold mt-2">Cambio: $ {{$this->change}}</p>
    </div>
    <input type="number" name="recibido" wire:model="mount" wire:input="updateChange" placeholder="Monto recibido" class="mt-1 form-control w-100">
</div>
