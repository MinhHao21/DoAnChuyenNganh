@extends('layout.trangchu')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/js/youtobevideo/videobox.js"></script>
    <div class="set-web mx-auto">
        <div class="text-3xl border-b border-red-700 text-blue-800 mb-4">{{ $chuyenmuc->name }} </div>
        <main class="grid grid-cols-12">
            <div class="sm:col-span-9 col-span-12 grid grid-cols-12">
                <div class="col-span-12 grid grid-cols-12 gap-4">
                    @if(count($posts) > 0)
                    <div class="col-span-12 sm:p-3 p-0 shadow-xl mb-4">
                        <div class="w-full">
                            <video class="demo w-full"  controls>
                                <source src="{{ $posts[0]->linkyoutube }}" type="video/mp4">
                                </video>
                        </div>
                        <h3 class="text-lg font-bold pb-4 text-justify mt-3">
                            {{$posts[0]->name}}
                        </h3>
                    </div>
                    @endif
                    <div class="col-span-12 grid grid-cols-12">
                    @foreach($posts as $p)
                    @if($p != $posts[0])
                        <div class="sm:col-span-4 col-span-12 sm:mr-6 mx-auto mb-4">
                            <div>
                                <div class="hinhanh-img overflow-hidden relative">
                                <video width="320" height="240" controls>
                                <source src="{{ $p->linkyoutube }}" type="video/mp4">
                                </video>
                                </div>
                                <p class="hinhanh-content font-medium text-justify">{{ $p->name }}</p>
                            </div>
                        </div>
                    @endif    
                    @endforeach    
                      
                    </div>
                </div> 
            </div>
            <!-- <div class="sm:col-span-3 col-span-12 sm:block hidden">
                <div class="mb-4">
                    <div class="pt-2 pb-4 " style="border-bottom: solid 1px  #b72929">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 float-left mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <p class="font-bold">LỊCH BIỂU DIỄN</p>
                    </div>
                    <div class="bg-gray-200 rounded-b-lg " style="height: 250px;">
                        <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="up" height="250px">
                            
                                
                            <p class="px-1 text-sm mb-1 border-b border-gray-300"> <span class="text-red-700 "> Ngày 17/12/2021: </span> Sinh hoạt câu lạc bộ</p>
                            <p class="px-1 text-sm mb-1 border-b border-gray-300"> <span class="text-red-700 "> Ngày 17/12/2021: </span> Sinh hoạt câu lạc bộ</p>

                            <p class="px-1 text-sm mb-1 border-b border-gray-300"> <span class="text-red-700 "> Ngày 17/12/2021: </span> Sinh hoạt câu lạc bộ</p>
                            <p class="px-1 text-sm mb-1 border-b border-gray-300"> <span class="text-red-700 "> Ngày 17/12/2021: </span> Sinh hoạt câu lạc bộ</p>
                            <p class="px-1 text-sm mb-1 border-b border-gray-300"> <span class="text-red-700 "> Ngày 17/12/2021: </span> Sinh hoạt câu lạc bộ</p>
                            <p class="px-1 text-sm mb-1 border-b border-gray-300"> <span class="text-red-700 "> Ngày 17/12/2021: </span> Sinh hoạt câu lạc bộ</p>
                            <p class="px-1 text-sm mb-1 border-b border-gray-300"> <span class="text-red-700 "> Ngày 17/12/2021: </span> Sinh hoạt câu lạc bộ</p>

                                
                            
                        </marquee>
                    </div>
                </div> -->
               
                <!-- <div class="w-full">
                    <div class="px-2 border-2 border-gray-100 mt-2">
                        <div class="pt-2 pb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 float-left mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <p class="font-bold">LỊCH BIỂU DIỄN</p>
                        </div>
                        <div id="test" class="">
                            <div class="bg-gray-100">
                                <p class="px-1 text-sm mb-1"> <span class="text-red-700"> Ngày 17/12/2021: </span> Sinh hoạt câu lạc bộ</p>
                                <p class="px-1 text-sm mb-1"> <span class="text-red-700">Ngày 17/12/2021: </span>Sinh hoạt câu lạc bộ a</p>
                                <p class="px-1 text-sm mb-1"><span class="text-red-700">Ngày 17/12/2021: </span> Sinh hoạt câu lạc bộ b</p>
                                <p class="px-1 text-sm mb-1"><span class="text-red-700">Ngày 17/12/2021: </span> Sinh hoạt câu lạc bộ c</p>
                                <p class="px-1 text-sm mb-1"><span class="text-red-700">Ngày 17/12/2021: </span> Sinh hoạt câu lạc bộ d</p>
                                <p class="px-1 text-sm mb-1"><span class="text-red-700">Ngày 17/12/2021: </span> Sinh hoạt câu lạc bộ e</p>
                                <p class="px-1 text-sm mb-1"><span class="text-red-700">Ngày 17/12/2021: </span> Sinh hoạt câu lạc bộ f</p>
                                <p class="px-1 text-sm mb-1"><span class="text-red-700">Ngày 17/12/2021: </span> Sinh hoạt câu lạc bộ g</p>
                                <p class="px-1 text-sm mb-1"><span class="text-red-700">Ngày 17/12/2021: </span> Sinh hoạt câu lạc bộ h</p>
                                <p class="px-1 text-sm mb-1"><span class="text-red-700">Ngày 17/12/2021: </span> Sinh hoạt câu lạc bộ j</p>
                                <p class="px-1 text-sm mb-1"><span class="text-red-700">Ngày 17/12/2021: </span> Sinh hoạt câu lạc bộ k</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-2 border-2 border-gray-100 mt-12">
                        <div class="pt-2 pb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 float-left mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.636 18.364a9 9 0 010-12.728m12.728 0a9 9 0 010 12.728m-9.9-2.829a5 5 0 010-7.07m7.072 0a5 5 0 010 7.07M13 12a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                            <p class="font-bold">NHÀ HÁT ONLINE</p>
                        </div>
                        <div>
                            <iframe width="288" height="150" src="https://www.youtube.com/embed/videoseries?list=PLPCoBaN8vOf8mOP6dWOUiUL5D3GQ4juhE" frameborder="0"></iframe>
                        </div>
                        <div class="bg-blue-800  rounded-t-lg  border-b-2  py-3 px-2 rounded-lg mx-auto mt-4">
                            <a href="">
                                <i class="fas fa-file-contract text-2xl px-2 text-white"></i>
                                <span class=" font-bold text-xl  text-white ">ĐẶT VÉ ONLINE</p>
                                </span>
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>                       
        </main>
    </div>
    <script>
        $(".demo").videoBox({
            height: '360',
            loop: false,
            autoplay: false,
            byline: true,
            color: "00adef",
            maxheight: '',
            maxwidth: '',
            portrait: true,
            title: ''
        });
       
</script>
@endsection

