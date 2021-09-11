<table class="table">
    <tbody>
        <tr>
            <td>ID</td>
            <td>{{ $empleado->id }}</td>
        </tr>
        <tr>
            <td>{{__('t.nombre')}}</td>
            <td>{{$empleado->nombre }}</td>
        </tr>
        <tr>
            <td>{{__('t.apellido')}}</td>
            <td>{{ $empleado->apellido }}</td>
        </tr>
        <tr>
            <td>{{__('t.email')}}</td>
            <td>{{ $empleado->email }}</td>
        </tr>
        <tr>
            <td>{{__('t.telefono')}}</td>
            <td>{{ $empleado->telefono }}</td>
        </tr>
        <tr>
            <td>{{__('t.empleador')}}</td>
            <td>
                <a href="/empresas/{{ $empleado->empleador->id }}">
                    <p>{{ $empleado->empleador->nombre }}</p>
                    <p><img src="{{ url('/uploads/').'/'. $empleado->empleador->logotipo }}" style="width: 400px">
                    </p>
                </a>
            </td>
        </tr>
    </tbody>
</table>