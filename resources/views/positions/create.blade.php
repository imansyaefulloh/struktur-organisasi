@extends('layouts.app')
@section('title', 'Create Positions Index')
@section('content')
<div class="container">
    <div class="row">
        @include('layouts.partials.sidebar')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Create New Position</div>
                <div class="card-body">
                    {!! Form::model($position, [
                    'method' => 'POST',
                    'route' => 'positions.store',
                    'files' => true,
                    'id'    => 'position-post'
                    ]) !!}
                    
                    @include('positions.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
$('ul.pagination').addClass('no-margin pagination-sm');
</script>
@endsection