<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $empresa->id }}</p>
</div>

<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $empresa->nombre }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $empresa->email }}</p>
</div>

<!-- Logotipo Field -->
<div class="col-sm-12">
    {!! Form::label('logotipo', 'Logotipo:') !!}
    <p><img src="{{ url('/').'/' . $empresa->logotipo }}" style="width: 50%; object-fit: cover"></p>
</div>

<!-- Sitioweb Field -->
<div class="col-sm-12">
    {!! Form::label('sitioweb', 'Sitioweb:') !!}
    <p>{{ $empresa->sitioweb }}</p>
</div>
@foreach ($empresa->empleados as $empleado)

<div class="col-sm-12">
    <p>Empleados:</p>

    <a href="/empleados/{{$empleado->id}}">{{$empleado->nombre}} {{$empleado->apellido}}</a>
</div>

@endforeach
