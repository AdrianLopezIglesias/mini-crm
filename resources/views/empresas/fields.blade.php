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
    <div class="input-group">
            <label for="logotipo">{{__('t.logotipo')}}</label>
            <input type="file" class="form-control-file" id="logotipo" name="logotipo">
    </div>
</div>
<div class="clearfix"></div>


<!-- Sitioweb Field -->
<div class="form-group col-sm-12">
    <label for="sitioweb">{{__('t.sitioweb')}}</label>
    {!! Form::text('sitioweb', null, ['class' => 'form-control']) !!}
</div>