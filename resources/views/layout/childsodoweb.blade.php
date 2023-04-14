<style>
.sodocon {
    content: "";
    display: block;
    width: 10px;
    height: 0;
    border-top: 1px solid;
    margin-top: -1px;
    
}

</style>
<div class="text-blue-900 px-4 " >
    @foreach ($danhmuc as $dm)
    <div class="">

    </div>
    <div class=" text-blue-900 hover:text-blue-600 font-bold text-lg flex items-center">
        <div class="sodocon"></div>
        <i class="fa-solid fa-folder px-2"></i>
        @if($dm['url'])
        <a class="topping" href="{{$dm['url']}}">{{$dm['label']}}</a>
        @else
        <a class="topping" href="/danh-muc/{{$dm['slug']}}">{{$dm['label']}}</a>
        @if ($dm['kiemtra']==1)
        @include('layout.childsodoweb', ['danhmuc' => $dm['children']])
        @endif
        @endif
    </div>
    @endforeach
</div>