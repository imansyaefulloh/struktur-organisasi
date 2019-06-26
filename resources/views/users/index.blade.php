@extends('layouts.app')
@section('title', 'Users Index')
@section('content')
<div class="container">
    @include('layouts.partials.message')
    <div class="row">
        @include('layouts.partials.sidebar')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Users</div>
                <div class="card-body">
                    <div>
                        <a href="{{ route('users.create') }}" class="btn btn-success">
                            <i class="fa fa-plus"></i>
                            Add new
                        </a>
                    </div>
                    <br>
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr class="table-light">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                @if ($user->position()->exists())
                                <td>{{ $user->position->name }}</td>
                                @else
                                <td> - </td>
                                @endif
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id]]) !!}
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-xs btn-default btn-info btn-sm">
                                        Edit
                                    </a>
                                    <button onclick="return confirm('Are you sure ?');" type="submit" class="btn btn-xs btn-danger btn-sm">
                                    Delete
                                    </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
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