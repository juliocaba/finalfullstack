{{-- <!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $socio->name }}</p>
</div>

<!-- Lastname Field -->
<div class="col-sm-12">
    {!! Form::label('lastname', 'Lastname:') !!}
    <p>{{ $socio->lastname }}</p>
</div>
 --}}
 <div class="card-body">
    <!-- Dni Field -->
    <div class="col-md-6 mt-1 mb-1">
        <div class="form-group row">
            {!! Form::label('dni', 'DNI:',['class' =>'col-md-3 col-form-label font-weight-bold']) !!}
            <div class="col-md-6 mt-1">
                {{ $socio->dni }} 
            </div>        
        </div>
    </div>
    <!-- Direction Field -->
    <div class="col-md-6 mt-1 mb-1">
        <div class="form-group row">
            {!! Form::label('direction', 'Direccion:',['class' =>'col-md-3 col-form-label font-weight-bold']) !!}
            <div class="col-md-6 mt-1">
                {{ $socio->direction }}       
            </div>        
        </div>        
    </div>
    <!-- Phone Field -->
    <div class="col-md-6 mt-1 mb-1">
        <div class="form-group row">
            {!! Form::label('phone', 'Telefono:',['class' =>'col-md-3 col-form-label font-weight-bold']) !!}
            <div class="col-md-6 mt-1">
                {{ $socio->phone }}
            </div>        
        </div>            
    </div>
    <!-- Email Field -->
    <div class="col-md-6 mt-1 mb-1">
        <div class="form-group row">
            {!! Form::label('email', 'Email:',['class' =>'col-md-3 col-form-label font-weight-bold']) !!}
            <div class="col-md-6 mt-1">
                {{ $socio->email }}
            </div>        
        </div>            
    </div>
    
    <!-- Estado Field -->
    {!! Form::hidden('estado', 0) !!}
    <div class="col-md-6">
        <div class="form-group row">
            {!! Form::label('estado', 'Activo',['class' =>'col-md-3 col-form-label font-weight-bold']) !!}
            <div class="col-md-8 pt-2">
                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    {!! Form::checkbox('estado', 1, null,  ['class' => 'custom-control-input']) !!}
                    <label class="custom-control-label" for="estado"></label>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-sm-12">
        {!! Form::label('estado', 'Estado:') !!}
        <p>{{ $socio->estado }}</p>
    </div> --}}

</div>
{{-- 
<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $socio->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $socio->updated_at }}</p>
</div>

 --}}