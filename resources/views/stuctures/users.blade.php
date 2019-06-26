@if (count($users) == 1)
    ({{ $users[0]->name }})
@else
    <ul>
    @for($i = 0; $i < count($users); $i++)    
        {{-- @if ($i == (count($users) - 1))
            {{ $users[$i]->name }}</li>
        @else --}}
       <li>{{ $users[$i]->name}}</li>
        {{-- @endif --}}
    @endfor
    </ul>
@endif