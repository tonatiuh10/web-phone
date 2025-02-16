@extends('layouts.app')

<style>
    .dropdown-item:hover {
        background-color: #000 !important;
        color: white;
    }

    .dropdown-item:active {
        background-color: #000 !important; 
        color: white;
    }
</style>

@section('content')
    <h1 class="m-2">Inventario</h1>

    <div class="container my-4 mx-0 px-0">
        <button class="btn btn-warning color-black">Productos</button>
        <button class="btn btn-secondary">Servicios</button>
    </div>
 
    <div class="input-group mb-1">
        <input type="text" class="form-control" placeholder="Producto" aria-label="producto">
        <button class="input-group-text me-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
              </svg>
        </button>
        <div class="dropdown mx-1">
            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Producto
            </button>
            <ul class="dropdown-menu bg-dark">
              <li><a class="dropdown-item" href="#">Agregar</a></li>
              <li><a class="dropdown-item" href="#">Mostrar</a></li>
            </ul>
        </div>
        <div class="dropdown mx-1">
            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categoria
            </button>
            <ul class="dropdown-menu bg-dark">
              <li><a class="dropdown-item" href="#">Agregar</a></li>
              <li><a class="dropdown-item" href="#">Mostrar</a></li>
            </ul>
        </div>
        <div class="dropdown mx-1">
            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Proveedor
            </button>
            <ul class="dropdown-menu bg-dark">
              <li><a class="dropdown-item" href="#">Agregar</a></li>
              <li><a class="dropdown-item" href="#">Mostrar</a></li>
            </ul>
        </div>
    </div>
    
    <div>
      @component('__components.table-admin')
      @endcomponent
    </div>

    <div class="d-flex">
        <div class="w-50 p-1 my-3 mx-1 card">
            @component('__components.minitable')
                @slot('title', 'Top Productos')
            @endcomponent
        </div>
        <div class="w-50 p-1 my-3 mx-1 card">
          @component('__components.minitable')
            @slot('title','Proximos a terminar')
          @endcomponent
        </div>
    </div>
@endsection