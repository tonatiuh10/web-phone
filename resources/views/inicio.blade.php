@extends('layouts.app')

@section('content')
<p>User> {{auth()->user()->username}}</p>
<form action="{{route('logout')}}" method='GET'>
    <button type='submit'>Cerrar Sesion</button>
</form>
@endsection