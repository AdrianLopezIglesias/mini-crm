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
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => 255,'minlength' => 2, 'required']) !!}
</div>
<div class="form-group col-sm-12">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control','maxlength' => 255,'minlength' => 2, 'required']) !!}
</div>


<?php
$empresas = App\Models\Empresa::all()->pluck('nombre', 'id');
$empresas->prepend('Seleccionar empresa', '');
?>

<div class="form-group col-sm-12">
    {!! Form::label('empresa', 'Empresa') !!}
    {!! Form::select('empresa', $empresas, $empleado->empresa, ['class' => 'form-control']) !!}
</div>



<!-- Email Field -->
<div class="form-group col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>