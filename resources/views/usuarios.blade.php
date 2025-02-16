@extends('layouts.app')

<style>
    .page-link{
        color: black !important;
    }
</style>

@section('content')
    <h1 class="m-2">Usuarios</h1>
 
    <div class="input-group mb-1">
        <input type="text" class="form-control" placeholder="Nombre" aria-label="nombre">
        <button class="input-group-text me-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
              </svg>
        </button>
        <input type="number" class="form-control" placeholder="ID" aria-label="id">
        <button class="input-group-text me-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
              </svg>
        </button>
        <input type="tel" class="form-control" placeholder="Celular" aria-label="celular">
        <button class="input-group-text me-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
              </svg>
        </button>
        <input type="email" class="form-control" placeholder="Correo" aria-label="correo">
        <button class="input-group-text me-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
              </svg>
        </button>
    </div>

    <div>
        @if($users->isEmpty())
            <p>Vacio</p>
        @else
        <div>
            @component('__components.table-admin')
             @slot('users',$users)
            @endcomponent
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">{{$users->links()}}</li>
            </ul>
          </nav>
        @endif
    </div>
@endsection