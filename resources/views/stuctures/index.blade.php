@extends('layouts.app')
@section('title', 'Positions Index')
@section('content')
<div class="container">
    <div class="row">
        @include('layouts.partials.sidebar')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Company Stucture</div>
                <div class="card-body">
                    <ul>
                        <li>{{$positions->name}} ({{ $positions->users[0]->name }})</li>
                        @foreach($positions->subordinates as $position)
                        <ul>
                            <li>
                                {{$position->name}}
                                @if($position->users()->exists())
                                    @include('stuctures.users',['users' => $position->users])
                                @endif
                            </li>
                            @if($position->subordinates()->exists())
                            @include('stuctures.subordinates',['subordinateChilds' => $position->subordinates])
                            @endif
                        </ul>
                        @endforeach
                    </ul>
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