@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{__("t.empresas")}}</h1>
            </div>
            @auth
            <div class="col-sm-6">
                <a class="btn btn-primary float-right" href="{{ route('empresas.create') }}">
                    {{__("t.nuevo")}}
                </a>
            </div>
            @endauth
        </div>
    </div>
</section>

<div class="content px-3">


    <div class="clearfix"></div>

    <div class="card">
        <div class="card-body p-0">
            @include('empresas.table')

            <div class="card-footer clearfix float-right">
                <div class="float-right">
                </div>
            </div>
        </div>

    </div>
</div>

@endsection