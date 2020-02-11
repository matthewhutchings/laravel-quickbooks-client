@extends('spark::layouts.app')
@section('content')
<div class="container">

    <div class="card">
        <div class="card-header">
            <h1 class="page-heading">QuickBooks Disconnect</h1>
        </div>

        <div class="card-body">
            <a href="{{ route('quickbooks.disconnect') }}" onclick="event.preventDefault();document.getElementById('disconnect-form').submit();">
                Disconnect from {{ $company->CompanyName }}
            </a>

            <form id="disconnect-form" action="{{ route('quickbooks.disconnect') }}" method="POST" style="display: none;">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
@endsection