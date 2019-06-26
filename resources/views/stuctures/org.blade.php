@extends('layouts.app')
@section('title', 'Positions Index')
@section('content')
<div class="container">
    <div class="row">
        {{-- @include('layouts.partials.sidebar') --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Company Stucture</div>
                <div class="card-body">
                    {{-- <ul id="org" style="display:none">
                        <li>
                            Food
                            <ul>
                                <li id="beer">Beer</li>
                                <li>Vegetables
                                    <a href="http://wesnolte.com" target="_blank">Click me</a>
                                    <ul>
                                        <li>Pumpkin</li>
                                        <li>
                                            <a href="http://tquila.com" target="_blank">Aubergine</a>
                                            <p>A link and paragraph is all we need.</p>
                                        </li>
                                    </ul>
                                </li>
                                <li class="fruit">Fruit
                                    <ul>
                                        <li>Apple
                                            <ul>
                                                <li>Granny Smith</li>
                                            </ul>
                                        </li>
                                        <li>Berries
                                            <ul>
                                                <li>Blueberry</li>
                                                <li>Cucumber
                                                    <ul>
                                                        <li>TEST 1</li>
                                                        <li>TEST 2</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>Bread</li>
                                <li class="collapsed">Chocolate
                                    <ul>
                                        <li>Topdeck</li>
                                        <li>Reese's Cups</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul> --}}
                    <ul id="org" style="display:none">
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

                    {{-- {!! $tree !!} --}}
                    <div id="chart" class="orgChart"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
@endsection