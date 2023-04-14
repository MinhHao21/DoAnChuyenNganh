@extends('layout.trangchu')
@section('content')
<div class=" main-content-wrap page-news col-sm-9" style="padding: 0px;">
    <div class="container main-bg no-padding col-sm-12">
        <section id="my-bre">
            <div id="sub-cats" class="clearfix">
                <ul class="img-100 clearfix">
                    <li class="parent-cat">
                        <h1 class="page-title">{{$getdanhmuc->name}}</h1>
                    </li>
                </ul>

            </div>
        </section>
        <section id="main-banner" class="clearfix h2-light">
            <div class="col-sm-12">
                <div class="row">
                    <div class="new-line-row">
                        @foreach ($allbaiviet as $qt)
                        <article class="item-list" style="min-height: 130px">
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
                            <div class="post-entry">
                                <a href="/chi-tiet-tin-tuc/{{$qt->slug}}" targetExt="">
                                    <h2 style="font-size: 20px;" class="post-box-title">
                                        {{$qt->title}}
                                    </h2>
                                </a>
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
                                        }">{{catchuoi(trim(strip_tags(html_entity_decode($qt->excerpt))), 60)}}</p>
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
                                        }">{{catchuoi(trim(strip_tags(html_entity_decode($qt->content))), 60)}}</p>
                                        @endif
                            </div>
                        </article>
                        @endforeach
                      <div style="display: flex; justify-content: center;   ">

                          {{$allbaiviet -> onEachSide(1) -> links()}} 
                      </div>                  

                    </div>
                </div>
            </div>

        </section>
    </div>
</div>
@endsection