<div class="d-flex justify-content-center">
    {!! $empresas->links() !!}
</div>
<div class="table-responsive">
    <table class="table" id="empresas-table">
        <thead>
            <tr>
                <th>{{ __('t.nombre') }}</th>
                <th>{{ __('t.email') }}</th>
                <th>{{ __('t.logotipo') }}</th>
                <th>{{ __('t.web') }}</th>
                <th colspan="3">{{ __('t.accion') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empresas as $empresa)
            <tr>
                <td>{{ $empresa->nombre }}</td>
                <td>{{ $empresa->email }}</td>
                <td><img src="/uploads/{{ $empresa->logotipo}}" style="width: 100px; height: 100px; object-fit: cover"></td>
                <td>{{ $empresa->sitioweb }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('empresas.show', [$empresa->id]) }}" class='btn btn-outline-secondary btn-xs'>
                            <span>{{ __('t.ver') }}</span>
                        </a>
                        @auth
                        <a href="{{ route('empresas.edit', [$empresa->id]) }}" class='btn btn-outline-secondary btn-xs'>
                            <span>{{ __('t.editar') }}</span>
                        </a>
                        {!! Form::open(['route' => ['empresas.destroy', $empresa->id], 'method' => 'delete']) !!}
                        {!! Form::button('<span>Delete</span>', ['type' => 'submit', 'class' => 'btn btn-outline-danger
                        btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
                @endauth
            </tr>
            @endforeach
        </tbody>
    </table>

</div>