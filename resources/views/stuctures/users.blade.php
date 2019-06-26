@if (count($users) == 1)
    <span>({{ $users[0]->name }})</span>
@else
    @for($i = 0; $i < count($users); $i++)
        @if ($i == (count($users) - 1))
            {{ $users[$i]->name }})</span> 
        @else
           <span>({{ $users[$i]->name . ", "}}
        @endif
    @endfor
@endif