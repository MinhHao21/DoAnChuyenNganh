
    @foreach ($danhmuc as $dm)
        <option value="{{$dm['id']}}">
            -- -- {{$dm['label']}}
        @if ($dm['kiemtra']==1)
            @include('layout.childmobile', ['danhmuc' => $dm['children']])
        @endif    
        </option >
    @endforeach    
