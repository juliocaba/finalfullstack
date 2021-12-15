@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detalle del comentario </h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-outline-dark  float-right"
                       href="{{ route('admin.comentarios.index') }}">
                        Volver
                    </a>                    
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @include('admin.comentarios.show_fields')
                </div>
            </div>
        </div>
    </div>
@endsection
