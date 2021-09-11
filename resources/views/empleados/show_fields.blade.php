<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $empleado->id }}</p>
</div>

<!-- Nombre Field -->
<div class="col-sm-12">
<label for="nombre">{{__('t.nombre')}}</label>
    <p>{{ $empleado->nombre }}</p>
</div>
<div class="col-sm-12">
<label for="apellido">{{__('t.apellido')}}</label>
    <p>{{ $empleado->apellido }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
<label for="email">{{__('t.email')}}</label>
    <p>{{ $empleado->email }}</p>
</div>
<div class="col-sm-12">
<label for="telefono">{{__('t.telefono')}}</label>

    <p>{{ $empleado->telefono }}</p>
</div>
<div class="col-sm-12">
<label for="empleador">{{__('t.empleador')}}</label>

    <a href="/empresas/{{ $empleado->empleador->id }}">
        <p>{{ $empleado->empleador->nombre }}</p>

        <p><img src="{{ $empleado->empleador->logotipo }}" style="width: 200px" /></p>
    </a>
</div>