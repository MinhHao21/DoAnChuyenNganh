@extends('layout.trangchu')
@section('content')
<div class=" main-content-wrap page-news col-sm-9" style="padding: 0px;">
    <div class="container main-bg no-padding col-sm-12">
        <section id="main-banner" class="clearfix h2-light">
            <div class="col-sm-12">
                <div class="row">
                    <div class="new-line-row">
                        @foreach ($post as $qt)
                        <article class="item-list">
                            <div class="post-thumbnail">
                                <a href="/chi-tiet-tin-tuc/{{$qt->slug}}" targetExt="">
                                    @if($qt->thumbnail == null)
                                    <img src="/images/noimg.jpg" alt="{{$qt->title}}" id="imghot">
                                    @else
                                        @if(strlen(strstr($qt->thumbnail, 'data:'))>0)
                                        <img src="/{{$qt->thumbnail}}" alt="{{$qt->title}}"
                                        style="object-fit:contain; width:100%;">
                                        @else
                                        <img src="/storage/{{$qt->thumbnail}}" alt="{{$qt->title}}"
                                        style="object-fit:contain; width:100%;">
                                        @endif

                                    @endif
                                    



                                </a>
                            </div>
                            <div class="post-entry">
                                <a href="/chi-tiet-tin-tuc/{{$qt->slug}}" targetExt="">
                                    <h2 class="post-box-title">
                                        {{$qt->title}}
                                    </h2>

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
                                            text-align: justify;}">{{catchuoi(strip_tags($qt->excerpt), 60)}}</p>
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
                                            text-align: justify;}">{{catchuoi(strip_tags($qt->content), 60)}}</p>
                                        @endif
                                </a>

                            </div>
                        </article>
                        @endforeach

                        {{$post -> links()}} 

                    </div>
                </div>
            </div>

        </section>
    </div>
</div>
@endsection