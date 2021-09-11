<div class="d-flex justify-content-center">
    {!! $empleados->links() !!}
</div>
<div class="table-responsive">
    <table class="table" id="empleados-table">
        <thead>
            <tr>
                <th>{{ __('t.empleador') }}</th>
                <th>{{ __('t.nombre') }}</th>
                <th>{{ __('t.apellido') }}</th>
                <th>{{ __('t.email') }}</th>
                <th>{{ __('t.telefono') }}</th>
                <th colspan="3">{{ __('t.accion') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
            <tr>
                <td>{{ $empleado->empleador->nombre ?? "" }}</td>
                <td>{{ $empleado->nombre }}</td>
                <td>{{ $empleado->apellido }}</td>
                <td>{{ $empleado->email }}</td>
                <td>{{ $empleado->telefono }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('empleados.show', [$empleado->id]) }}"
                            class='btn btn-outline-secondary btn-xs'>
                            <span>{{ __('t.ver') }}</span>
                        </a>
                        @auth
                        <a href="{{ route('empleados.edit', [$empleado->id]) }}"
                            class='btn btn-outline-secondary btn-xs'>
                            <span>{{ __('t.editar') }}</span>
                        </a>
                        {!! Form::open(['route' => ['empleados.destroy', $empleado->id], 'method' => 'delete']) !!}
                        {!! Form::button('<span>Delete</span>', ['type' => 'submit', 'class' => 'btn btn-outline-danger
                        btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                    @endauth
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>