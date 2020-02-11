@extends('spark::layouts.app')
@section('content')
<div class="container">

    <div class="card">
        <div class="card-header">
            <h1 class="page-heading">QuickBooks Set Up</h1>
        </div>

        <div class="card-body">
            <a href="{!! $authorization_uri !!}"><img src="{{ asset('/images/C2QB_white_btn_lg_default.png') }}" class="img-fluid" width="250px" alt="ProcureHQ Logo"></a>
        </div>
    </div>
</div>
@endsection