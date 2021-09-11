@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>{{__('t.nueva_empresa')}}</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        <div class="card">

            {!! Form::open(['route' => 'empresas.store', 'files' => true]) !!}

            <div class="card-body">

                <div class="row">
                    @include('empresas.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('empresas.index') }}" class="btn btn-default">{{__('t.cancel')}}</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
