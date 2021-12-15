{{-- {!! Form::open(['route' => ['admin.comentarios.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('admin.comentarios.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('admin.comentarios.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="fa fa-edit"></i>
    </a>
    {!! Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
 --}}
 <div class="btn-group">
    <a href="{{ route('admin.comentarios.show', $id) }}" class='btn mr-3 btn-outline-success btn-sm' data-toggle="tooltip" data-placement="top" title="Ver">
        <i class="fa fa-eye"></i>
    </a>    
    
    <a  class="btn btn-sm mr-3 btn-outline-danger"  onclick="borrado({{$id}})" id="submitForm" data-toggle="tooltip" data-placement="top" title="Eliminar">
        <i class="fa fa-trash"></i>
    </a>
 </div>