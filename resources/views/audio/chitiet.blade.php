@extends('layout.layoutchinh')
@section('content')
    <div class="my-3 text-justify bg-white">
        <div class="grid grid-cols-12">

        </div>
        @if($chitiet)
            <p class="font-bold text-3xl text-justify ">{{ $chitiet->name }}</p>
            <p><img src="/storage/{{ $chitiet->thumbnail }}" alt="" class="w-full"></p>
        @endif
        <h3 style="border-left:2px solid blue;">&nbspAudio cùng chuyên mục</h3>
        @foreach($audioKhac as $p)
            <div class="col-span-12 grid grid-cols-12 mb-4 mt-2 border-b-2">
                <div class="col-span-3 mt-2 p2">
                    <img src="/storage/{{ $p->thumbnail }}" alt="" class="w-full">
                </div>
                <div class="col-span-9 pl-2 pt-2">
                    <p class="font-bold text-justify text-xl my-1 text-gray-800">
                        <a href="/chi-tiet-audio/{{$p['slug']}}">
                            {{ $p->name }}
                        </a>
                    </p>
                </div>
            </div>
        @endforeach

    </div>

@endsection
