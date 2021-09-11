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
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 255,'minlength' => 2, 'required']) !!}
</div>
<div class="form-group col-sm-12">
<label for="apellido">{{__('t.apellido')}}</label>
    {!! Form::text('apellido', null, ['class' => 'form-control','maxlength' => 255,'minlength' => 2, 'required']) !!}
</div>


<?php
$empresas = App\Models\Empresa::all()->pluck('nombre', 'id');
$empresas->prepend('Seleccionar empresa', '');
?>

<div class="form-group col-sm-12">
<label for="empresa">{{__('t.empresa')}}</label>
    {!! Form::select('empresa', $empresas, $empleado->empresa, ['class' => 'form-control']) !!}
</div>



<!-- Email Field -->
<div class="form-group col-sm-12">
<label for="email">{{__('t.email')}}</label>
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12">
<label for="telefono">{{__('t.telefono')}}</label>
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>