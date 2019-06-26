@foreach($subordinateChilds as $sub)
<ul>
    <li>
        {{$sub->name}}
        @if($sub->users()->exists())
            @include('stuctures.users',['users' => $sub->users])
        @endif
    </li>
    @if($sub->subordinates()->exists())
    @include('stuctures.subordinates',['subordinateChilds' => $sub->subordinates])
    @endif
</ul>
@endforeach