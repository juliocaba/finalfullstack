@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <h1 class="display-4 pl-2">Bienvenido <strong>{{auth()->user()->name}}</strong></h1>        
        {{-- <hr class="my-4"> --}}
        <p class="pl-2">Al administrador de socios del club, espero sea de su agrado y utilidad</p>
    </div>
   {{--  <div class="row">
        
    </div> --}}
</div>
@endsection
