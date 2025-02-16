@extends('layouts.app')

@section('content')
    <h1 class="m-2">Ventas</h1>
    <div class="input-group mb-2">
        @livewire('search-product')
    </div>

    <div class="d-flex" style="position: relative;">
        <div class="w-75">
            @livewire('table-sales')
        </div>
        <div class="w-25">
            @livewire('card-sale')
        </div>
    </div>
    

    <div class="d-flex mt-2">
         <div class="w-75 card mx-1 p-1">
            @livewire('info-order')
         </div>
        <div class="card mx-1">
            @livewire('card-user')
        </div>
   </div>
@endsection