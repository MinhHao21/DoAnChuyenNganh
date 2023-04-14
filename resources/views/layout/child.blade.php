
<ul class="border border-gray-600 shadow-lg ">
    @foreach ($danhmuc as $dm)
        <li><a href="/danh-muc/{{$dm['slug']}}" title="Giới thiệu" class=" text-black hover:text-red-900 hover:bg-gray-200 font-bold">{{$dm['name']}}</a>
        @if ($dm['kiemtra']==1)
                @include('layout.child', ['danhmuc' => $dm['con']])
        @endif
        </li>
    @endforeach
</ul>

