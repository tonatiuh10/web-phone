@extends('layouts.app')

@section('content')
    <h1 class="m-2">Servicios</h1>
    <div class="input-group mb-2">
        <input type="text" class="form-control" placeholder="Servicio" aria-label="servicio">
        <button class="input-group-text me-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
              </svg>
        </button>
        <input type="text" class="form-control ms-1" placeholder="Cliente" aria-label="cliente">
        <button class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
              </svg>
        </button>
    </div>

    <div class="d-flex">
        <div class="w-75">
            @component('__components.table')
                @slot('title','Servicio')
            @endcomponent
        </div>
        <div class="w-25">
            @component('__components.cardSale')
            @endcomponent
        </div>
    </div>

    <div class="d-flex mt-2">
       <div class="card w-50 mx-1">
            @component('__components.cardUser')
                @slot('name','Tonatiuh Alvarez')
                @slot('rol','Administrador')
            @endcomponent
       </div>
        <div class="w-50 card mx-1 p-1">
            @component('__components.minitable')
                @slot('title','Servicios Recientes')
            @endcomponent
        </div>
    </div>
@endsection