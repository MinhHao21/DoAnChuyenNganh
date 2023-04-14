
<ul class="cap_2 text-blue-800">
    @foreach ($danhmuc as $dm)
    <li class="li2">
            @if($dm['url'])
            <a class="topping" href="{{$dm['url']}}" >{{$dm['label']}}</a>
            @else
            <a class="topping" href="/danh-mucs/{{$dm['slug']}}" >{{$dm['label']}}</a>
            @if ($dm['kiemtra']==1)
                @include('layout.childmobilettgpl', ['danhmuc' => $dm['children']])
            @endif
            @endif
        </li>
    @endforeach
</ul>

