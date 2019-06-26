@extends('layouts.app')
@section('title', 'Create Positions Index')
@section('content')
<div class="container">
    <div class="row">
        @include('layouts.partials.sidebar')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Edit Position</div>
                <div class="card-body">
                    {!! Form::model($position, [
                    'method' => 'PUT',
                    'route' => ['positions.update', $position->id],
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