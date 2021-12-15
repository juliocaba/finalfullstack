@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Comentarios</h1>
                </div>
                <div class="col-sm-6">
                   {{--  <a class="btn btn-primary float-right"
                       href="{{ route('admin.comentarios.create') }}">
                        Add New
                    </a> --}}
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body">
                @include('admin.comentarios.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

<script>
    function borrado(id) {
    
         swal({
                title: "Esta seguro?",
                text: "El borrado no tiene vuelta atras",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#dd0a0a",
                confirmButtonText: "Aceptar",
                cancelButtonText: "Cancelar",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm){
                if (isConfirm){
                    swal({
                        title: '¡Eliminado!',
                        text: 'El comentario fue eliminado con exito!',
                        type: 'success'
                        }, function() {
                            $.ajax({                            
                                url : "{{ url('admin/comentarios')}}" + '/' + id,                                                        
                                method : "POST",                                                        
                                data:{
                                    "_method":"DELETE",
                                    "_token": "{{ csrf_token() }}"},                            
                                success: function(data){                                                                        
                                    location.reload();                                                                                                
                                }                               
                            });                        
                            
                        }); 
                } else {
                    swal("Cancelado", "Podes seguir usando el dato", "error");
                }
        });
    }            
    </script>