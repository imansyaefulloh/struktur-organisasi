@extends('layouts.app')
@section('title', 'Positions Index')
@section('content')
<div class="container">
    @include('layouts.partials.message')
    <div class="row">
        @include('layouts.partials.sidebar')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Job Positions</div>
                <div class="card-body">
                    <div>
                        <a href="{{ route('positions.create') }}" class="btn btn-success">
                            <i class="fa fa-plus"></i>
                            Add new
                        </a>
                    </div>
                    <br>
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr class="table-light">
                                <th scope="col">#</th>
                                <th scope="col">Position</th>
                                <th scope="col">Boss</th>
                                <th scope="col" width="200">Subordinate</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($positions as $position)
                            <tr>
                                <td>{{ $position->id }}</td>
                                <td>{{ $position->name }}</td>
                                @if ($position->boss()->exists())
                                <td>{{ $position->boss->name }}</td>
                                @else
                                <td> - </td>
                                @endif
                                @if ($position->subordinates()->exists())
                                <td>
                                    @for($i = 0; $i < count($position->subordinates); $i++)
                                        @if ($i == (count($position->subordinates) - 1))
                                            {{ $position->subordinates[$i]->name }}
                                        @else
                                            {{ $position->subordinates[$i]->name . ", "}}
                                        @endif
                                    @endfor
                                </td>
                                @else
                                <td> - </td>
                                @endif
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['positions.destroy', $position->id]]) !!}
                                    <a href="{{ route('positions.edit', $position->id) }}" class="btn btn-xs btn-default btn-info btn-sm">
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
                    {{ $positions->links() }}
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