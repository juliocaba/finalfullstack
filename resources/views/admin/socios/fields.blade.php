<div class="row ml-1 mr-1">
    <!-- Dni Field -->
    @if (isset($socio->dni))
    <div class="col-md-6 mt-1 mb-1">
        <div class="form-group row">
            {!! Form::label('dni', 'DNI:',['class' =>'col-md-3 col-form-label font-weight-bold']) !!}
            <div class="col-md-9">
                {!! Form::text('dni', null, ['class' => 'form-control', 'max-width' => '75%','border-radius'=>'.25rem', 'disabled' =>'disabled']) !!}    
            </div>        
        </div>
    </div>    
    @else
    <div class="col-md-6 mt-1 mb-1">
        <div class="form-group row">
            {!! Form::label('dni', 'DNI:',['class' =>'col-md-3 col-form-label font-weight-bold']) !!}
            <div class="col-md-9">
                {!! Form::text('dni', null, ['class' => 'form-control', 'max-width' => '75%','border-radius'=>'.25rem']) !!}    
            </div>        
        </div>
    </div>    
    @endif
    
    <!-- Name Field -->
    <div class="col-md-6 mt-1 mb-1">
        <div class="form-group row">
            {!! Form::label('name', 'Nombre:',['class' =>'col-md-3 col-form-label font-weight-bold']) !!}
            <div class="col-md-9">
                {!! Form::text('name', null, ['class' => 'form-control', 'max-width' => '75%','border-radius'=>'.25rem']) !!}    
            </div>        
        </div>
    </div>
    <!-- Lastname Field -->
    <div class="col-md-6 mt-1 mb-1">
        <div class="form-group row">
            {!! Form::label('lastname', 'Apellido:',['class' =>'col-md-3 col-form-label font-weight-bold']) !!}
            <div class="col-md-9">
                {!! Form::text('lastname', null, ['class' => 'form-control', 'max-width' => '75%','border-radius'=>'.25rem']) !!}    
            </div>        
        </div>
    </div>
    <!-- Direction Field -->
    <div class="col-md-6 mt-1 mb-1">
        <div class="form-group row">
            {!! Form::label('direction', 'Direccion:',['class' =>'col-md-3 col-form-label font-weight-bold']) !!}
            <div class="col-md-9">
                {!! Form::text('direction', null, ['class' => 'form-control', 'max-width' => '75%','border-radius'=>'.25rem']) !!}    
            </div>        
        </div>
    </div>
    <!-- Phone Field -->
    <div class="col-md-6 mt-1 mb-1">
        <div class="form-group row">
            {!! Form::label('phone', 'Telefono:',['class' =>'col-md-3 col-form-label font-weight-bold']) !!}
            <div class="col-md-9">
                {!! Form::text('phone', null, ['class' => 'form-control', 'max-width' => '75%','border-radius'=>'.25rem']) !!}    
            </div>        
        </div>
    </div>
    <!-- Email Field -->
    <div class="col-md-6 mt-1 mb-1">
        <div class="form-group row">
            {!! Form::label('email', 'Email:',['class' =>'col-md-3 col-form-label font-weight-bold']) !!}
            <div class="col-md-9">
                {!! Form::email('email', null, ['class' => 'form-control', 'max-width' => '75%','border-radius'=>'.25rem']) !!}    
            </div>        
        </div>
    </div>
    <!-- Estado Field -->
    {!! Form::hidden('estado', 0) !!}
    <div class="col-md-6 mt-1 mb-1">
        <div class="form-group row">
            {!! Form::label('estado', 'Activo:',['class' =>'col-md-4 col-form-label font-weight-bold']) !!}        
                <div class="col-md-8 custom-control custom-switch custom-switch-off-danger custom-switch-on-success mt-2">
                    {!! Form::checkbox('estado', 1, null,  ['class' => 'custom-control-input']) !!}
                    <label class="custom-control-label" for="estado"></label>
                </div>        
        </div>
    </div>
    {{-- {!! Form::hidden('estado', 0) !!}
    <div class="col-md-9">
        <div class="form-group col-md-6">
            {!! Form::label('estado', 'Activo:',['class' =>'col-md-6 col-form-label font-weight-bold']) !!}        
                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success ml-2">
                    {!! Form::checkbox('estado', 1, null,  ['class' => 'custom-control-input']) !!}
                    <label class="custom-control-label" for="estado"></label>
                </div>        
        </div>
    </div> --}}
</div>