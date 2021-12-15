<div class="card-body">
    <!-- Name Field -->
    <div class="col-md-6 mt-1 mb-1">
        <div class="form-group row">
            {!! Form::label('name', 'Nombre:',['class' =>'col-md-3 col-form-label font-weight-bold']) !!}
            <div class="col-md-6 mt-1">
                {{ $comentario->name }}
            </div>        
        </div>
    </div>
    <!-- Email Field -->
    <div class="col-md-6 mt-1 mb-1">
        <div class="form-group row">
            {!! Form::label('email', 'Email:',['class' =>'col-md-3 col-form-label font-weight-bold']) !!}
            <div class="col-md-6 mt-1">
                {{ $comentario->email }}
            </div>        
        </div>
    </div>
    <!-- Subject Field -->
    <div class="col-md-6 mt-1 mb-1">
        <div class="form-group row">
            {!! Form::label('subject', 'Asunto:',['class' =>'col-md-3 col-form-label font-weight-bold']) !!}
            <div class="col-md-6 mt-1">
                {{ $comentario->subject }}
            </div>        
        </div>
    </div>
    <!-- Message Field -->
    <div class="col-md-6 mt-1 mb-1">
        <div class="form-group row">
            {!! Form::label('message', 'Mensaje:',['class' =>'col-md-3 col-form-label font-weight-bold']) !!}
            <div class="col-md-6 mt-1">
                {{ $comentario->message }}
            </div>        
        </div>
    </div>
</div>