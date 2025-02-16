@extends('layouts.app')

@section('content')
{{auth()->user()->id}}
<form action="{{route('logout')}}" method='GET'>
    <button type='submit'>Cerrar Sesion</button>
</form>
@endsection