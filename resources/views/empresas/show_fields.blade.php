<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $empresa->id }}</p>
</div>

<!-- Nombre Field -->
<div class="col-sm-12">
<label for="nombre">{{__('t.nombre')}}</label>

    <p>{{ $empresa->nombre }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
<label for="email">{{__('t.email')}}</label>

    <p>{{ $empresa->email }}</p>
</div>

<!-- Logotipo Field -->
<div class="col-sm-12">
<label for="logotipo">{{__('t.logotipo')}}</label>

    <p><img src="{{ url('/').'/' . $empresa->logotipo }}" style="width: 50%; object-fit: cover"></p>
</div>

<!-- Sitioweb Field -->
<div class="col-sm-12">
<label for="sitioweb">{{__('t.sitioweb')}}</label>

    <p>{{ $empresa->sitioweb }}</p>
</div>
@foreach ($empresa->empleados as $empleado)

<div class="col-sm-12">
    <p>{{__('t.empleados')}}</p>

    <a href="/empleados/{{$empleado->id}}">{{$empleado->nombre}} {{$empleado->apellido}}</a>
</div>

@endforeach
