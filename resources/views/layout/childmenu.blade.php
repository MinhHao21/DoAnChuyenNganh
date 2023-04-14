<div class="py-3 px-3">
    @foreach ($danhmuc as $dm)
        <div class="py-1 text-sm">
            <a href="/danh-muc/{{$dm['slug']}}">{{$dm['label']}}</a>
        @if ($dm['kiemtra']==1)
            @include('layout.childmenu', ['danhmuc' => $dm['children']])
        @endif    
        </div >
    @endforeach    
</div>