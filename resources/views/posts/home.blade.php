@extends('layout.trangchu')
@section('content')


<!-- BASE -->
<div class="col-sm-9" style="padding: 0;">
    <section id="main-banner" class="clearfix h2-light">
        <div class="col-sm-9">
            <div class="section-header">
                <a>
                    <h2>Tin tức</h2>
                    
                </a>

            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-5 col-sm-12 border-das ">


                        <div class="spe-article ">
                            <div class="post-thumbnail" style="margin-bottom: 10px; ">
                                <a href="/chi-tiet-tin-tuc/{{$Postnew->slug}}" >
                                    @if($Postnew->thumbnail == null)
                                    <img src="/images/noimg.jpg" alt="{{$Postnew->title}}" id="imghot">
                                    @else
                                    
                                        @if(strlen(strstr($Postnew->thumbnail, 'data:')) > 0 || strlen(strstr($Postnew->thumbnail, 'http://'))>0)

                                        <img src="{{$Postnew->thumbnail}}" alt="{{$Postnew->title}}" style="object-fit:contain; width:100%;">
                                        @else
                                        <img src="/storage/{{$Postnew->thumbnail}}" alt="{{$Postnew->title}}" style="object-fit:contain; width:100%;">
                                        @endif

                                    @endif

                                </a>
                            </div>
                            <div class="post-entry"  >
                                <a href="/chi-tiet-tin-tuc/{{$Postnew->slug}}" style="color:black; " >
                                    <h2 style="font-size:20px; " class="post-box-title">
                                        {{$Postnew->title}}
                                    </h2>
                                    @if(strlen($Postnew->excerpt) >0)
                                        <p style="display: block;
                                            display: -webkit-box;
                                            height: 16px*1.3*3;
                                            font-size: 16px;
                                            line-height: 1.3;
                                            -webkit-line-clamp: 3;  /* số dòng hiển thị */
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            margin-top:10px;
                                            text-align: justify;
                                        ">{{catchuoi(trim(strip_tags(html_entity_decode($Postnew->excerpt))), 30)}}</p>
                                        @else
                                        <p style="display: block;
                                            display: -webkit-box;
                                            height: 16px*1.3*3;
                                            font-size: 16px;
                                            line-height: 1.3;
                                            -webkit-line-clamp: 3;  /* số dòng hiển thị */
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            margin-top:10px;
                                            text-align: justify;
                                        ">{{catchuoi(trim(strip_tags(html_entity_decode($Postnew->content))), 30)}}</p>
                                        @endif
                                </a>

                            </div>
                        </div>



                    </div>
                    <div class="col-md-7 col-sm-12 border-das">
                        <ul class="right-focus-wrap clearfix">
                            @foreach ($quantam as $qt)
                            <li class="multi-posts clearfix" style="min-height: 100px">


                                <div class="post-thumbnail">
                                    <a href="/chi-tiet-tin-tuc/{{$qt->slug}}" targetExt="">
                                        @if($qt->thumbnail == null)
                                        <img src="/images/noimg.jpg" alt="{{$qt->title}}" id="imghot">
                                        @else
                                        @if(strlen(strstr($qt->thumbnail, 'data:'))|| strlen(strstr($qt->thumbnail, 'http://'))>0 )                                   
                                            <img src="{{$qt->thumbnail}}" alt="{{$qt->title}}" style="object-fit:contain; width:100%;">
                                        @else
                                            <img src="/storage/{{$qt->thumbnail}}" alt="{{$qt->title}}" style="object-fit:contain; width:100%;">
                                        @endif

                                    @endif

                                    </a>
                                </div>
                                <div class="post-entry"  style="padding-bottom: 10px;">
                                    <a href="/chi-tiet-tin-tuc/{{$qt->slug}}" targetExt="" style="color:black;">
                                        <h3 style="font-size:16px;" class="post-box-title">
                                            {{$qt->title}}
                                        </h3>
                                        @if(strlen($qt->excerpt) >0)
                                        <p style="display: block;
                                            display: -webkit-box;
                                            height: 16px*1.3*3;
                                            font-size: 16px;
                                            line-height: 1.3;
                                            -webkit-line-clamp: 3;  /* số dòng hiển thị */
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            margin-top:10px;
                                            text-align: justify;
                                        ">{{catchuoi(trim(strip_tags(html_entity_decode($qt->excerpt))), 30)}}</p>
                                        @else
                                        <p style="display: block;
                                            display: -webkit-box;
                                            height: 16px*1.3*3;
                                            font-size: 16px;
                                            line-height: 1.3;
                                            -webkit-line-clamp: 3;  /* số dòng hiển thị */
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            margin-top:10px;
                                            text-align: justify;
                                        ">{{catchuoi(trim(strip_tags(html_entity_decode($qt->content))), 30)}}</p>
                                        @endif
                                    </a>

                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="right-focus clearfix">
                <div class="right-focus-content clearfix">
                    <div class="section-header">
                        <h2>BÀI MỚI</h2>
                    </div>
                    <div class="content-wrap">
                        <ul class="right-focus-wrap">
                            @foreach ($PostsNoibat as $qt)
                            <li class="multi-posts clearfix">

                                <div class="post-entry" style="padding-bottom: 10px;">

                                    <a href=" /chi-tiet-tin-tuc/{{$qt->slug}}" >
                                        <h3  class="post-box-title">
                                            {{$qt->title}}
                                        </h3>
                                        
                                    </a>

                                </div>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full">
        <!-- <img style="width: 100%;max-height: 160px;"
            src="https://sotp.thainguyen.gov.vn/image/journal/article?img_id=8052782&t=1673032022312" alt=""> -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/storage/{{$banner[0]->thumbnail}}" alt="" style="width:100%;max-height: 160px;">
                </div>
                @foreach($banner as $bn)
                    @if($bn->id != $banner[0]->id)
                        <div class="item">
                            <img src="/storage/{{$bn->thumbnail}}" alt="" style="width:100%;max-height: 160px;">
                        </div>
                    @endif
                @endforeach
                
                
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-chevron-left" aria-hidden="true" style="padding-top: 70px; padding-bottom: 30px;"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-chevron-right" aria-hidden="true" style="padding-top: 70px; padding-bottom: 30px;"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section id="main-banner" class="clearfix h2-light">
        <div class="col-sm-12">
            <div class="section-header">
                <a>
                    <h2>GÓC NHÌN VĂN HÓA</h2>
                </a>

            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-5 col-sm-12 border-das ">

                        <div class="spe-article ">
                            <div class="post-thumbnail" style="margin-bottom: 10px;">
                                <a href="/chi-tiet-tin-tuc/{{$PostGocnhinvanhoa->slug}}" targetExt="" style="color:black;">
                                    @if($PostGocnhinvanhoa->thumbnail == null)
                                    <img src="images/noimg.jpg" alt="{{$PostGocnhinvanhoa->title}}" id="imghot">
                                    @else
                                        @if(strlen(strstr($PostGocnhinvanhoa->thumbnail, 'data:'))>0 || strlen(strstr($PostGocnhinvanhoa->thumbnail, 'http://'))>0)                                            
                                            <img src="{{$PostGocnhinvanhoa->thumbnail}}" alt="{{$PostGocnhinvanhoa->title}}" style="object-fit:contain; width:100%;">
                                        @else
                                            <img src="/storage/{{$PostGocnhinvanhoa->thumbnail}}" alt="{{$PostGocnhinvanhoa->title}}" style="object-fit:contain; width:100%;">
                                        @endif

                                    @endif

                                </a>
                            </div>
                            <div class="post-entry">
                                <a href="/chi-tiet-tin-tuc/{{$PostGocnhinvanhoa->slug}}" targetExt="" style="color:black;">
                                    <h2 style="font-size:20px;" class="post-box-title">
                                        {{$PostGocnhinvanhoa->title}}
                                    </h2>
                                    @if(strlen($PostGocnhinvanhoa->excerpt) >0)
                                        <p style="display: block;
                                            display: -webkit-box;
                                            height: 16px*1.3*3;
                                            font-size: 16px;
                                            line-height: 1.3;
                                            -webkit-line-clamp: 3;  /* số dòng hiển thị */
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            margin-top:10px;
                                            text-align: justify;
                                        ">{{catchuoi(trim(strip_tags(html_entity_decode($PostGocnhinvanhoa->excerpt))), 30)}}</p>
                                        @else
                                        <p style="display: block;
                                            display: -webkit-box;
                                            height: 16px*1.3*3;
                                            font-size: 16px;
                                            line-height: 1.3;
                                            -webkit-line-clamp: 3;  /* số dòng hiển thị */
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            margin-top:10px;
                                            text-align: justify;
                                        ">{{catchuoi(trim(strip_tags(html_entity_decode($PostGocnhinvanhoa->content))), 30)}}</p>
                                        @endif
                                </a>

                            </div>
                        </div>





                    </div>
                    <div class="col-md-7 col-sm-12 border-das">
                        <ul class="right-focus-wrap clearfix">
                            @foreach ($PostsGocnhinvanhoa as $qt)
                            <li class="multi-posts clearfix" style="min-height: 100px">


                                <div class="post-thumbnail">
                                    <a href="/chi-tiet-tin-tuc/{{$qt->slug}}" targetExt="" style="color:black;">
                                        @if($qt->thumbnail == null)
                                        <img src="images/noimg.jpg" alt="{{$qt->title}}" id="imghot">
                                        @else
                                        @if(strlen(strstr($qt->thumbnail, 'data:'))>0 || strlen(strstr($qt->thumbnail, 'http://'))>0)                                  
                                            <img src="{{$qt->thumbnail}}" alt="{{$qt->title}}" style="object-fit:contain; width:100%;">
                                        @else
                                            <img src="/storage/{{$qt->thumbnail}}" alt="{{$qt->title}}" style="object-fit:contain; width:100%;">
                                        @endif

                                    @endif

                                    </a>
                                </div>
                                <div class="post-entry" style="padding-bottom: 10px;">
                                    <a href="/chi-tiet-tin-tuc/{{$qt->slug}}" targetExt="" style="color:black;">
                                        <h3 style="font-size:16px;" class="post-box-title">
                                            {{$qt->title}}
                                        </h3>
                                        @if(strlen($qt->excerpt) >0)
                                        <p style="display: block;
                                            display: -webkit-box;
                                            height: 16px*1.3*3;
                                            font-size: 16px;
                                            line-height: 1.3;
                                            -webkit-line-clamp: 3;  /* số dòng hiển thị */
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            margin-top:10px;
                                            text-align: justify;
                                        ">{{catchuoi(trim(strip_tags(html_entity_decode($qt->excerpt))), 30)}}</p>
                                        @else
                                        <p style="display: block;
                                            display: -webkit-box;
                                            height: 16px*1.3*3;
                                            font-size: 16px;
                                            line-height: 1.3;
                                            -webkit-line-clamp: 3;  /* số dòng hiển thị */
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            margin-top:10px;
                                            text-align: justify;
                                        ">{{catchuoi(trim(strip_tags(html_entity_decode($qt->content))), 30)}}</p>
                                        @endif
                                    </a>

                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="new-article tin-trong-nc clearfix">
        <div class="col-sm-12">
            <div class="section-header">
                <a>
                    <h2>VĂN HÓA ĐỜI SỐNG</h2>
                </a>

            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-5 col-sm-12 border-das ">

                        <div class="spe-article ">
                            <div class="post-thumbnail" style="margin-bottom: 10px;">
                                <a href="/chi-tiet-tin-tuc/{{$PostVanhoadoisong->slug}}" targetExt="">
                                    @if($PostVanhoadoisong->thumbnail == null)
                                    <img src="/images/noimg.jpg" alt="{{$PostVanhoadoisong->title}}" id="imghot">
                                    @else
                                        @if(strlen(strstr($PostVanhoadoisong->thumbnail, 'data:'))>0 || strlen(strstr($PostVanhoadoisong->thumbnail, 'http://'))>0  )                                          
                                            <img src="{{$PostVanhoadoisong->thumbnail}}" alt="{{$PostVanhoadoisong->title}}" style="object-fit:contain; width:100%;">
                                        @else
                                            <img src="/storage/{{$PostVanhoadoisong->thumbnail}}" alt="{{$PostVanhoadoisong->title}}" style="object-fit:contain; width:100%;">
                                        @endif

                                    @endif

                                </a>
                            </div>
                            <div class="post-entry" >
                                <a href="/chi-tiet-tin-tuc/{{$PostVanhoadoisong->slug}}" targetExt="" style="color:black;">
                                    <h2 class="post-box-title" style="font-size:20px; overflow: hidden; text-overflow: ellipsis; line-height: 25px; -webkit-line-clamp: 3; height: 75px; display: -webkit-box; -webkit-box-orient: vertical;">
                                        {{$PostVanhoadoisong->title}}
                                    </h2>
                                    @if(strlen($PostVanhoadoisong->excerpt) >0)
                                        <p style="display: block;
                                            display: -webkit-box;
                                            height: 16px*1.3*3;
                                            font-size: 16px;
                                            line-height: 1.3;
                                            -webkit-line-clamp: 3;  /* số dòng hiển thị */
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            margin-top:10px;
                                            text-align: justify;
                                        ">{{catchuoi(trim(strip_tags(html_entity_decode($PostVanhoadoisong->excerpt))), 30)}}</p>
                                        @else
                                        <p style="display: block;
                                            display: -webkit-box;
                                            height: 16px*1.3*3;
                                            font-size: 16px;
                                            line-height: 1.3;
                                            -webkit-line-clamp: 3;  /* số dòng hiển thị */
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            margin-top:10px;
                                            text-align: justify;
                                        ">{{catchuoi(trim(strip_tags(html_entity_decode($PostVanhoadoisong->content))), 30)}}</p>
                                        @endif
                                </a>

                            </div>
                        </div>





                    </div>
                    <div class="col-md-7 col-sm-12 border-das">
                        <ul class="right-focus-wrap clearfix">
                            @foreach ($PostsVanhoadoisong as $qt)
                            <li class="multi-posts clearfix" style="min-height: 100px">


                                <div class="post-thumbnail">
                                    <a href="/chi-tiet-tin-tuc/{{$qt->slug}}" targetExt="">
                                        @if($qt->thumbnail == null)
                                        <img src="/images/noimg.jpg" alt="{{$qt->title}}" id="imghot">
                                        @else
                                        @if(strlen(strstr($qt->thumbnail, 'data:'))>0 || strlen(strstr($qt->thumbnail, 'http://'))>0)                                        
                                            <img src="{{$qt->thumbnail}}" alt="{{$qt->title}}" style="object-fit:contain; width:100%;">
                                        @else
                                            <img src="/storage/{{$qt->thumbnail}}" alt="{{$qt->title}}" style="object-fit:contain; width:100%;">
                                        @endif

                                    @endif

                                    </a>
                                </div>
                                <div class="post-entry" style="padding-bottom: 10px;">
                                    <a href="/chi-tiet-tin-tuc/{{$qt->slug}}" targetExt="" style="color:black;">
                                        <h3 style="font-size:16px;" class="post-box-title">
                                            {{$qt->title}}
                                        </h3>
                                        @if(strlen($qt->excerpt) >0)
                                        <p style="display: block;
                                            display: -webkit-box;
                                            height: 16px*1.3*3;
                                            font-size: 16px;
                                            line-height: 1.3;
                                            -webkit-line-clamp: 3;  /* số dòng hiển thị */
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            margin-top:10px;
                                            text-align: justify;
                                    ">{{catchuoi(trim(strip_tags(html_entity_decode($qt->excerpt))), 30)}}</p>
                                        @else
                                        <p style="display: block;
                                            display: -webkit-box;
                                            height: 16px*1.3*3;
                                            font-size: 16px;
                                            line-height: 1.3;
                                            -webkit-line-clamp: 3;  /* số dòng hiển thị */
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            margin-top:10px;
                                            text-align: justify;
                                        ">{{catchuoi(trim(strip_tags(html_entity_decode($qt->content))), 30)}}</p>
                                        @endif
                                    </a>

                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="new-article tin-trong-nc clearfix">
        <div class="col-sm-12">
            <div class="section-header">
                <a>
                    <h2>ĐIỆN ẢNH</h2>
                </a>

            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-5 col-sm-12 border-das ">

                        <div class="spe-article ">
                            <div class="post-thumbnail" style="margin-bottom: 10px;">
                                <a href="/chi-tiet-tin-tuc/{{$PostDienanh->slug}}" >
                                    @if($PostDienanh->thumbnail == null)
                                    <img src="/images/noimg.jpg" alt="{{$PostDienanh->title}}" id="imghot">
                                    @else
                                        @if(strlen(strstr($PostDienanh->thumbnail, 'data:'))>0|| strlen(strstr($PostDienanh->thumbnail, 'http://'))>0 )                                           
                                        <img src="{{$PostDienanh->thumbnail}}" alt="{{$PostDienanh->title}}" style="object-fit:contain; width:100%;">
                                        @else
                                            <img src="/storage/{{$PostDienanh->thumbnail}}" alt="{{$PostDienanh->title}}" style="object-fit:contain; width:100%;">
                                        @endif

                                    @endif

                                </a>
                            </div>
                            <div class="post-entry">
                                <a href="/chi-tiet-tin-tuc/{{$PostDienanh->slug}}"  style="color:black;">
                                    <h2 class="post-box-title" style="font-size:20px; overflow: hidden; text-overflow: ellipsis; line-height: 25px; -webkit-line-clamp: 3; height: 75px; display: -webkit-box; -webkit-box-orient: vertical;">
                                        {{$PostDienanh->title}}
                                    </h2>
                                    @if(strlen($PostDienanh->excerpt) >0)
                                        <p style="display: block;
                                            display: -webkit-box;
                                            height: 16px*1.3*3;
                                            font-size: 16px;
                                            line-height: 1.3;
                                            -webkit-line-clamp: 3;  /* số dòng hiển thị */
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            margin-top:10px;
                                            text-align: justify;
                                        ">{{catchuoi(trim(strip_tags(html_entity_decode($PostDienanh->excerpt))), 30)}}</p>
                                        @else
                                        <p style="display: block;
                                            display: -webkit-box;
                                            height: 16px*1.3*3;
                                            font-size: 16px;
                                            line-height: 1.3;
                                            -webkit-line-clamp: 3;  /* số dòng hiển thị */
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            margin-top:10px;
                                            text-align: justify;
                                        ">{{catchuoi(trim(strip_tags(html_entity_decode($PostDienanh->content))), 30)}}</p>
                                        @endif
                                </a>

                            </div>
                        </div>





                    </div>
                    <div class="col-md-7 col-sm-12 border-das">
                        <ul class="right-focus-wrap clearfix">
                            @foreach ($PostsDienanh as $qt)
                            <li class="multi-posts clearfix" style="min-height: 100px">


                                <div class="post-thumbnail">
                                    <a href="/chi-tiet-tin-tuc/{{$qt->slug}}" targetExt="">
                                        @if($qt->thumbnail == null)
                                        <img src="/images/noimg.jpg" alt="{{$qt->title}}" id="imghot">
                                        @else
                                        @if(strlen(strstr($qt->thumbnail, 'data:'))>0|| strlen(strstr($qt->thumbnail, 'http://'))>0     )                                       
                                            <img src="{{$qt->thumbnail}}" alt="{{$qt->title}}" style="object-fit:contain; width:100%;">
                                        @else
                                            <img src="/storage/{{$qt->thumbnail}}" alt="{{$qt->title}}" style="object-fit:contain; width:100%;">
                                        @endif

                                    @endif

                                    </a>
                                </div>
                                <div class="post-entry" style="padding-bottom: 10px;">
                                    <a href="/chi-tiet-tin-tuc/{{$qt->slug}}" targetExt="" style="color:black;">
                                        <h3 style="font-size:16px;" class="post-box-title">
                                            {{$qt->title}}
                                        </h3>
                                        @if(strlen($qt->excerpt) >0)
                                        <p style="display: block;
                                            display: -webkit-box;
                                            height: 16px*1.3*3;
                                            font-size: 16px;
                                            line-height: 1.3;
                                            -webkit-line-clamp: 3;  /* số dòng hiển thị */
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            margin-top:10px;
                                            text-align: justify;
                                        ">{{catchuoi(trim(strip_tags(html_entity_decode($qt->excerpt))), 30)}}</p>
                                        @else
                                        <p style="display: block;
                                            display: -webkit-box;
                                            height: 16px*1.3*3;
                                            font-size: 16px;
                                            line-height: 1.3;
                                            -webkit-line-clamp: 3;  /* số dòng hiển thị */
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            margin-top:10px;
                                            text-align: justify;
                                        ">{{catchuoi(trim(strip_tags(html_entity_decode($qt->content))), 30)}}</p>
                                        @endif
                                    </a>

                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </section>

    
   
</div>

<!-- END -->



@endsection