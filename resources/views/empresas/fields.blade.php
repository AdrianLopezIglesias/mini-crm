@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- Nombre Field -->
<div class="form-group col-sm-12">
    <label for="nombre">{{__('t.nombre')}}</label>
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 255,'minlength' => 5, 'required']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-12">
    <label for="email">{{__('t.email')}}</label>
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Logotipo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('logotipo', 'Logotipo:') !!}
    <div class="input-group">
        <div class="custom-file">
            <label for="logotipo">{{__('t.logotipo')}}</label>
            {!! Form::label('logotipo', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Sitioweb Field -->
<div class="form-group col-sm-12">
    <label for="sitioweb">{{__('t.sitioweb')}}</label>
    {!! Form::text('sitioweb', null, ['class' => 'form-control']) !!}
</div>