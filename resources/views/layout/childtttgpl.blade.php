
<div class="sub-menu uldoc" style="font-size: 11px;">
    @foreach ($danhmuc as $dm)
        <div class="lidoc font-bold" style="font-size: 11px;">
            <a href="/danh-mucs/{{$dm['slug']}}">{{$dm['label']}}</a>
        @if ($dm['kiemtra']==1)
            @include('layout.childmobile', ['danhmuc' => $dm['children']])
        @endif    
        </div >
    @endforeach    
</div>
