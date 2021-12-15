@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Agregar Socio</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'admin.socios.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('admin.socios.fields')
                </div>

            </div>

            <div class="card-footer"  style="text-align: center;">
                {!! Form::submit('Guardar', ['class' => 'btn btn-outline-primary']) !!}
                <a href="{{ route('admin.socios.index') }}" class="btn btn-outline-dark">Cancelar</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
