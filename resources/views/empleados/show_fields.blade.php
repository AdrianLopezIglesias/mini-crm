<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $empleado->id }}</p>
</div>

<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $empleado->nombre }}</p>
</div>
<div class="col-sm-12">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{{ $empleado->apellido }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $empleado->email }}</p>
</div>
<div class="col-sm-12">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $empleado->telefono }}</p>
</div>
<div class="col-sm-12">
    {!! Form::label('empleador', 'Empleador:') !!}
    <a href="/empresas/{{ $empleado->empleador->id }}">
        <p>{{ $empleado->empleador->nombre }}</p>

        <p><img src="{{ $empleado->empleador->logotipo }}" style="width: 200px" /></p>
    </a>
</div>