<table class="table">
    <tbody>
        <tr>
            <td>ID</td>
            <td>{{ $empresa->id }}</td>
        </tr>
        <tr>
            <td>{{__('t.nombre')}}</td>
            <td>{{$empresa->nombre }}</td>
        </tr>
        <tr>
            <td>{{__('t.email')}}</td>
            <td>{{ $empresa->email }}</td>
        </tr>
        <tr>
            <td>{{__('t.web')}}</td>
            <td>{{ $empresa->sitioweb }}</td>
        </tr>
        <tr>
            <td>{{__('t.logotipo')}}</td>
            <td>
                <p><img src="{{ url('/uploads/').'/'. $empresa->logotipo }}" style="width: 50%; object-fit: cover"></p>
            </td>
        </tr>
        <tr>
            <td>{{__('t.empleados')}}</td>
            <td>
                @foreach ($empresa->empleados as $empleado)

                <p><a href="/empleados/{{$empleado->id}}">{{$empleado->nombre}} {{$empleado->apellido}}</a></p>

                @endforeach
            </td>
        </tr>
    </tbody>
</table>


<p>{{ $empresa->sitioweb }}</p>
</div>