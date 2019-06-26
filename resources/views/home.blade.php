@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @include('layouts.partials.sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    Content Here
                </div>
            </div>
        </div>
    </div>
</div>
@endsection