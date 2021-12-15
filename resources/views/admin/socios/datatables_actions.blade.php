{{-- {!! Form::open(['route' => ['admin.socios.destroy', $id], 'method' => 'delete']) !!} --}}
<div class='btn-group'>    
    <a href="{{ route('admin.socios.show', $id) }}" class='btn mr-3 btn-outline-success btn-sm' data-toggle="tooltip" data-placement="top" title="Ver">
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('admin.socios.edit', $id) }}" class='btn mr-3 btn-sm btn-outline-info' data-toggle="tooltip" data-placement="top" title="Editar">
        <i class="fa fa-edit"></i>
    </a>
    
    <a  class="btn btn-sm mr-3 btn-outline-danger"  onclick="borrado({{$id}})" id="submitForm" data-toggle="tooltip" data-placement="top" title="Eliminar">
        <i class="fa fa-trash"></i>
    </a>
    {{-- <a class="btn btn-sm mr-3 btn-outline-danger" onclick="confirmDelete({{$id}})" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fa fa-trash"></i></a> --}}
    {{-- {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-sm mr-3 btn-outline-danger']) !!}    --}}
    {{-- /* 'onclick' => "return confirm('Are You Sure Want to Delete?')" */ --}}    
    
</div>
{{-- {!! Form::close() !!} --}}

