@extends('layouts.app')
@section('title', 'Create New User')
@section('content')
<div class="container">
    <div class="row">
        @include('layouts.partials.sidebar')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Create New User</div>
                <div class="card-body">
                    {!! Form::model($user, [
                    'method' => 'POST',
                    'route' => 'users.store',
                    'files' => true,
                    'id'    => 'user-post'
                    ]) !!}
                    
                    @include('users.form')
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