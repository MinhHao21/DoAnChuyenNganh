<!DOCTYPE html>

<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta name="viewport" content="width=device-width" />
    <title>
        Văn hóa Nghệ An
    </title>
    @yield('ogp')


    <!-- <link rel="icon" href="../vanhoa/Views/Content/images/favicon.ico"> -->
    <link rel="stylesheet" href="../vanhoa/Views/Content/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vanhoa/Views/Content/css/animate.css">
    <link rel="stylesheet" href="./vanhoa/maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vanhoa/Views/Content/css/swiper.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="../vanhoa/Views/Content/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../vanhoa/Views/Content/css/owl.theme.css">
    <link rel="stylesheet" href="../vanhoa/Views/Content/css/jquery.mmenu.all.css">
    <link rel="stylesheet" href="../vanhoa/Views/Content/css/common-use.css">
    <link rel="stylesheet" href="../vanhoa/Views/Content/css/style.css">
    <link rel="stylesheet" href="../vanhoa/Views/Content/css/responsive.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
   

    <script async src="/js/addthis_widget.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
    <script src='https://unpkg.com/vuejs-form@latest/build/vuejs-form.min.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://codepen.io/fancyapps/pen/Kxdwjj" />
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HPFKLP2T4Z');
    </script>
    <script>
        var counterContainer = document.querySelector(".website-counter");
        var resetButton = document.querySelector("#reset");
        var visitCount = localStorage.getItem("page_view");

        // Check if page_view entry is present
        if (visitCount) {
            visitCount = Number(visitCount) + 1;
            localStorage.setItem("page_view", visitCount);
        } else {
            visitCount = 1;
            localStorage.setItem("page_view", 1);
        }
        counterContainer.innerHTML = visitCount;

        // Adding onClick event listener
        resetButton.addEventListener("click", () => {
            visitCount = 1;
            localStorage.setItem("page_view", 1);
            counterContainer.innerHTML = visitCount;
        });
    </script>
    <style>
        .el-carousel__item img {
            width: 100%;
            height: 100%;
        }

        .el-carousel__item:nth-child(2n) {
            background-color: #99a9bf;
        }

        .el-carousel__item:nth-child(2n+1) {
            background-color: #d3dce6;
        }
    </style>
</head>

<body>

    <div id="my-header">
        @if($bannernoibat)
        <section id="up-header"
            style="background: url(/storage/{{$bannernoibat->thumbnail}}); background-repeat: repeat; background-size: 100% 100%;">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </section>
        @endif
        <section id="nav-wrap">
            <nav class="navbar navbar-inverse background " id="my-nav">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->


                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse no-padding" id="main-menu">

                        <ul class="nav navbar-nav menu-item "
                            style="justify-content: center;display: flex;float: none;">

                            <li>
                                <a href="/">
                                    <i class="fas fa-home"></i>
                                    Trang chủ
                                </a>
                            </li>
                            @foreach ($danhmuc as $dm)
                            <li class="dropdown keep-open">

                                @if($dm['children'] != [])
                                <a href="/tin-tuc/{{ $dm['slug']}}">
                                    {{ $dm['label']}}
                                    <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu multi-level drop-lv0" role="menu"
                                    aria-labelledby="dropdownMenu">
                                    @foreach ($dm['children'] as $dmc)
                                    <li><a href="/tin-tuc/{{ $dmc['slug']}}"> {{ $dmc['label']}}</a></li>

                                    @endforeach
                                </ul>
                                @else
                                <a href="/tin-tuc/{{$dm['slug']}}">
                                    {{ $dm['label']}}
                                </a>
                                @endif
                            </li>

                            @endforeach
                        </ul>
                        
                    </div>
                </div>
            </nav>
        </section>
        <div id="my-nav-menu">
            <div class="header">
                <a class="dis-block icon-open-nav" href="#menu">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </a>
                <div class="show-on clearfix">
                    <div class="text-logo">
                        <img src="images/logo.png" alt="" class="pull-left">
                    </div>
                    <span class="hot-line mr-20 pull-right"><i class="fa fa-phone"></i> </span>
                </div>
            </div>
            <nav id="menu" class="">

                <ul>

                    <li>
                        <a href="/">
                            <i class="far fa-home-lg"></i>
                            Trang chủ
                        </a>
                    </li>
                    @foreach ($danhmuc as $dm)
                    <li>

                        <a href="/tin-tuc/{{$dm['slug']}}">
                            {{ $dm['label']}} @if($dm['children'] != [])<i class="caret"></i>
                            @endif
                        </a>
                        <ul>
                            @if($dm['children'] != [])
                            @foreach ($dm['children'] as $dmc)
                            <li><a href="/tin-tuc/{{$dmc['slug']}}">{{ $dmc['label']}}</a></li>
                            @endforeach

                            @endif
                        </ul>
                    </li>
                    @endforeach
                </ul>

            </nav>
        </div>

    </div>



    <div class="main-content-wrap ">
        <div class="container main-bg no-padding " style="max-width:1200px">
            <div class="right-new-choose clearfix">
                
                <div style="width:100%" class="input-group d-flex justify-content-cente" style="padding-bottom: 20px;"
                    id="demo1">
                    <input v-model="searchnow" class="form-control border-end-0 border" placeholder="tìm kiếm"
                        id="example-search-input">
                    <div class="input-group-append">
                        <button @click="searchpost"
                            class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5"
                            type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            @yield('content')
            <div class="col-sm-3" style="padding:2px;">
                <div class="col-sm-12 choose-sm">
                    <div class="right-new-choose clearfix">
                       
                        <div class="input-group d-flex" style="padding-bottom: 20px;" id="demo">
                            <input v-model="searchnow" class="form-control border-end-0 border" placeholder="tìm kiếm"
                                id="example-search-input">
                            <span class="input-group-append">
                                <button @click="searchpost"
                                    class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5"
                                    type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="right-new-choose clearfix">
                        <div class="section-header">
                            <a>
                                <h2>Đặc San</h2>
                            </a>

                        </div>

                       
                        <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="/{{$mucluc[0]->link}}">
                                        <img src="/storage/{{$mucluc[0]->thumbnail}}" alt=""
                                            style="width:100%; height: 350px;">

                                    </a>
                                </div>
                                @foreach($mucluc as $bn)
                                @if($bn->id != $mucluc[0]->id)
                                <div class="item">
                                    <a href="/{{$bn->link}}">
                                        <img src="/storage/{{$bn->thumbnail}}" alt=""
                                            style="width:100%; height: 350px;">
                                    </a>
                                </div>
                                @endif
                                @endforeach


                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                                <i class="fa fa-chevron-left" aria-hidden="true"
                                    style="padding-top: 70px; padding-bottom: 30px;"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                                <i class="fa fa-chevron-right" aria-hidden="true"
                                    style="padding-top: 70px; padding-bottom: 30px;"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                        <!-- </ul> -->
                    </div>
                    <div class="right-new-choose clearfix" style="margin-top:10px;">
                        <div class="section-header">

                            <h2>Videos</h2>


                        </div>
                       
                        <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">

                                    <iframe width="100%" height="100%" src="{{$video[0]->linkyoutube }}" frameborder="0"
                                        allowfullscreen></iframe>

                                </div>
                                @foreach($video as $vd)
                                @if($vd->id != $video[0]->id)
                                <div class="item">

                                    <iframe width="100%" height="100%" src="{{$vd->linkyoutube }}" frameborder="0"
                                        allowfullscreen></iframe>

                                </div>
                                @endif
                                @endforeach


                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
                                <i class="fa fa-chevron-left" aria-hidden="true"
                                    style="padding-top: 70px; padding-bottom: 30px;"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel1" data-slide="next">
                                <i class="fa fa-chevron-right" aria-hidden="true"
                                    style="padding-top: 70px; padding-bottom: 30px;"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

            

                    <div class="right-new-choose clearfix" style="padding: 10px 0" id="hidden-s1">
                        <div class="section-header">
                            <a>
                                <h2>Liên kết </h2>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-12 border-das ">

                                <div class="spe-article">
                                    <div class="post-thumbnail">
                                        <a href="mailto:tcvhntdt@gmail.com"><i
                                                style="font-size: 30px;     color: #da1c1c;"
                                                class="fas fa-envelope"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 border-das ">

                                <div class="spe-article">
                                    <div class="post-thumbnail">
                                        <a href="col-md-4"><i style="font-size:  30px;     color: #da1c1c;"
                                                class="fab fa-twitter"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 border-das ">

                                <div class="spe-article">
                                    <div class="post-thumbnail">
                                        <a href="https://www.facebook.com/groups/4129142513833497"><i
                                                style="font-size:  30px;    color: #da1c1c;"
                                                class="fab fa-facebook-f"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 border-das ">

                                <div class="spe-article">
                                    <div class="post-thumbnail">
                                        <a href="col-md-4"><i style="font-size:  30px;    color: #da1c1c;"
                                                class="fab fa-instagram"></i></a>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                    <style>
                        #demo1 {
                            display: none;
                        }

                        @media (max-width: 575px) {

                            #hidden-s,
                            #hidden-s1,
                            #demo {
                                display: none !important;
                            }

                            #demo1 {
                                display: flex !important;

                            }




                        }
                    </style>
                    <div class="right-new-choose clearfix d-none d-sm-block" style="margin: 10px;" id="hidden-s">
                        <div class="section-header" style="margin:10px -10px;">
                            <h2>Thống kê truy cập</h2>
                        </div>
                        <div class="row"
                            style="padding: 10px; border: 10px solid #000000; border-radius: 8px; height: 100%; box-sizing: border-box;">
                            <div style="text-align: center; font-size:40px; font-weight: 1500;" >
                                <!-- <script type="text/javascript"
                                    src="https://services.webestools.com/cpt_visitors/71921-8-5.js"></script> -->
                                    <!-- {{$tongluottruycap}} -->
                                    <h1 class="grays">{{$tongluottruycap}}</h1>
                            </div>
                            <style>
                                
                                .grays{
                                    background-color:#292d32;
                                    font-family: 'Anton';
                                    color:whitesmoke;
                                    text-align: center;
                                    font-size: 35px;
                                    display: flex;
                                    flex-direction: column;
                                    align-items: center;
                                    justify-content: center;
                                    margin: 0;
                                    font-weight:900;
                                    border-radius:4px;
                                  }
                            </style>
                            @if($homnay > 0)
                            <div class="col-sm-12"
                                style="padding: 5px;display: flex;justify-content: space-between;align-items: center;">
                                <div>
                                    <img src="/images/icons8-user-30.png" style="width: 17px;" alt="">
                                    Hôm nay
                                </div>
                                <p class="" style="padding: 5px;text-align: right;">
                                    {{$homnay}}
                                </p>
                            </div>
                            @else
                            <div class="col-sm-12"
                                style="padding: 5px;display: flex;justify-content: space-between;align-items: center;">
                                <div>
                                    <img src="/images/icons8-user-30.png" style="width: 17px;" alt="">
                                    Hôm nay
                                </div>
                                <p class="" style="padding: 5px;text-align: right;">
                                    0
                                </p>
                            </div>
                            @endif

                            @if($homqua)
                            <div class="col-sm-12"
                                style="padding: 5px;display: flex;justify-content: space-between;align-items: center;">
                                <div>
                                    <img src="/images/icons8-account-48.png" style="width: 17px;" alt="">
                                    Hôm qua
                                </div>

                                <p class="" style="padding: 5px;text-align: right;">
                                    {{$homqua}}
                                </p>
                            </div>
                            @else
                            <div class="col-sm-12"
                                style="padding: 5px;display: flex;justify-content: space-between;align-items: center;">
                                <div>
                                    <img src="/images/icons8-account-48.png" style="width: 17px;" alt="">
                                    Hôm qua
                                </div>

                                <p class="" style="padding: 5px;text-align: right;">
                                    0
                                </p>
                            </div>
                            @endif


                            @if($tuannay)
                            <div class="col-sm-12"
                                style="padding: 5px;display: flex;justify-content: space-between;align-items: center;">
                                <div>
                                    <img src="/images/icons8-user-30.png" style="width: 17px;" alt="">
                                    Tuần này
                                </div>

                                <p class="" style="padding: 5px;text-align: right;">
                                    {{$tuannay}}
                                </p>
                            </div>

                            @endif
                            <!-- {{$thangnay}} -->
                            @if($thangnay)
                            <div class="col-sm-12"
                                style="padding: 5px;display: flex;justify-content: space-between;align-items: center;">
                                <div>
                                    <img src="/images/icons8-account-48.png" style="width: 17px;" alt="">
                                    Tháng này
                                </div>

                                <p class="" style="padding: 5px;text-align: right;">
                                    {{$thangnay}}
                                </p>
                            </div>
                            @else
                            <div class="col-sm-12"
                                style="padding: 5px;display: flex;justify-content: space-between;align-items: center;">
                                <div>
                                    <img src="/images/icons8-account-48.png" style="width: 17px;" alt="">
                                    Tháng này
                                </div>

                                <p class="" style="padding: 5px;text-align: right;">
                                    0
                                </p>
                            </div>
                            @endif

                            @if($thangqua)
                            <div class="col-sm-12"
                                style="padding: 5px;display: flex;justify-content: space-between;align-items: center;">
                                <div>
                                    <img src="/images/icons8-account-48.png" style="width: 17px;" alt="">
                                    Tháng qua
                                </div>

                                <p class="" style="padding: 5px;text-align: right;">
                                    {{$thangqua}}
                                </p>
                            </div>
                            @else
                            <div class="col-sm-12"
                                style="padding: 5px;display: flex;justify-content: space-between;align-items: center;">
                                <div>
                                    <img src="/images/icons8-account-48.png" style="width: 17px;" alt="">
                                    Tháng qua
                                </div>

                                <p class="" style="padding: 5px;text-align: right;">
                                    0
                                </p>
                            </div>
                            @endif

                            @if($tongluottruycap)
                            <div class="col-sm-12"
                                style="padding: 5px;display: flex;justify-content: space-between;align-items: center;">
                                <div>
                                    <img src="/images/icons8-combo-chart-48.png" style="width: 17px;" alt="">

                                    Tất cả
                                </div>

                                <p class="" style="padding: 5px;text-align: right;">
                                    {{$tongluottruycap}}
                                </p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <div style="display:flex; justify-content:center">
        <div class="form-check">
            <input style="accent-color:red" class="form-check-input" type="radio" name="flexRadioDefault"
                id="flexRadioDefault1" checked>

        </div>
        <div class="form-check" style="padding-left: 5px;">
            <input style="accent-color:#a33188" class="form-check-input" type="radio" name="flexRadioDefault"
                id="flexRadioDefault2">

        </div>
        <div class="form-check" style="padding-left: 5px;">
            <!-- <input style="accent-color:#edd782" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6" checked> -->

        </div>
        <div class="form-check" style="padding-left: 5px;">
            <input style="accent-color:#4267b2" class="form-check-input" type="radio" name="flexRadioDefault"
                id="flexRadioDefault3">

        </div>
        <div class="form-check" style="padding-left: 5px;">
            <input style="accent-color:#42b72a" class="form-check-input" type="radio" name="flexRadioDefault"
                id="flexRadioDefault4">

        </div>
        <div class="form-check" style="padding-left: 5px;">
            <input style="accent-color:#171940" class="form-check-input" type="radio" name="flexRadioDefault"
                id="flexRadioDefault5">

        </div>
    </div>

    <script language="javascript">
        var radio1 = document.getElementById("flexRadioDefault1");
        var radio2 = document.getElementById("flexRadioDefault2");
        var radio3 = document.getElementById("flexRadioDefault3");
        var radio4 = document.getElementById("flexRadioDefault4");
        var radio5 = document.getElementById("flexRadioDefault5");
        // var radio6 = document.getElementById("flexRadioDefault6");
        // window.onload= (event) => {
        //     document.getElementById('footer2').style.backgroundColor = "rgb(66, 103, 178)";
        //     document.getElementById('my-nav').style.backgroundColor = "rgb(66, 103, 178)";
        // };

        var background = document.getElementById('footer2');
        var background1 = document.getElementById('my-nav');

        // switch 
        radio1.onclick = function () {
            document.getElementById('footer2').style.backgroundColor = "#cf2228";
            document.getElementById('my-nav').style.backgroundColor = "#cf2228";
        };
        radio2.onclick = function () {
            document.getElementById('footer2').style.backgroundColor = "#a33188";
            document.getElementById('my-nav').style.backgroundColor = "#a33188";
        };
        radio3.onclick = function () {
            document.getElementById('footer2').style.backgroundColor = "#4267b2";
            document.getElementById('my-nav').style.backgroundColor = "#4267b2";
        };
        radio4.onclick = function () {
            document.getElementById('footer2').style.backgroundColor = "#42b72a";
            document.getElementById('my-nav').style.backgroundColor = "#42b72a";
        };
        radio5.onclick = function () {
            document.getElementById('footer2').style.backgroundColor = "#171940";
            document.getElementById('my-nav').style.backgroundColor = "#171940";
        };
        // radio6.onclick = function() {
        //     document.getElementById('footer2').style.backgroundColor = "#edd782";
        //     document.getElementById('my-nav').style.backgroundColor = "#edd782";
        // };
    </script>

    <footer id="footer2" class="background" style="font-family: Quicksand !important;">
        <div class="container">
            <div class="up-footer">
                <div class="row">
                    <div class="col-sm-8" style="font-weight: 700;">
                        <h2 class="footer-name"> VĂN HÓA NGHỆ AN</h2>
                        <p>Cơ quan chủ quản: Sở Văn hóa và Thể thao Nghệ An </p>

                        <p>Số giấy phép: 85/GP-STTTT, ngày 07 tháng 07 năm 2021 của Sở Thông tin và Truyền thông Nghệ An
                        </p>

                        <p>Chịu trách nhiệm nội dung:Th.s Trần Thị Mỹ Hạnh - Giám đốc Sở Văn Hóa và Thể Thao</p>

                    </div>
                    <div class="col-sm-4 info-footer text-right" style="font-weight: 700;">
                        <p>Địa chỉ: 74 Nguyễn Thi Minh Khai, thành phố Vinh, tỉnh Nghệ An</p>

                        <p>Điện thoại: (02383) 844511 - Hotline: 0902121415</p>

                        <p>Email: vanhoanghean2021@gmail.com</p>


                    </div>

                </div>
            </div>
        </div>

    </footer>
</body>
<script src="../vanhoa/Views/Content/js/lib/jquery-1.12.2.min.js"></script>
<script src="../vanhoa/Views/Content/js/lib/bootstrap.min.js"></script>
<script src="../vanhoa/Views/Content/js/lib/jquery.scrollUp.min.html"></script>
<script src="../vanhoa/Views/Content/js/lib/jquery.mmenu.all.min.js"></script>
<script src="../vanhoa/Views/Content/js/lib/owl.carousel.min.js"></script>
<script src="../vanhoa/Views/Content/js/owl.carousel2.thumbs.js"></script>
<script>
    var vm = new Vue({
        el: '#demo',
        data: {
            searchnow: '',
        },
        // chạy ngay khi web load
        mounted: function () {
            // console.log(61616161616161616161616)
        },
        // chạy khi thực hiện event
        methods: {
            searchpost() {
                const self = this;
                window.location.href = "/tim-kiem-post?search=" + self.searchnow;
            },
        }
    })
    var vm = new Vue({
        el: '#demo1',
        data: {
            searchnow: '',
        },
        // chạy ngay khi web load
        mounted: function () {
            // console.log(61616161616161616161616)
        },
        // chạy khi thực hiện event
        methods: {
            searchpost() {
                const self = this;
                window.location.href = "/tim-kiem-post?search=" + self.searchnow;
            },
        }
    })
</script>

<script type="text/javascript">
    $(function () {

        $('nav#menu').mmenu({
            extensions: ['fx-menu-slide', 'shadow-page', 'shadow-panels', 'listview-large',
                'pagedim-white'
            ],
            iconPanels: true,
            counters: true,
            keyboardNavigation: {
                enable: true,
                enhance: true
            },
        }, {
            searchfield: {
                clear: true
            }
        });
    });
</script>
<script>
    $(document).ready(function () {
        //var imgsrc = document.getElementById("imghot").src;
        //$('meta[property=og\\:image]').attr('content', imgsrc);
        $('#my-search').on('click', function () {
            $('#my-form-search').toggleClass('active');
        });
        //
        function myFunction() {
            $('#select-form').css("background-color", "yellow")
        }
    });
</script>

<script>
    $(document).ready(function () {
        $('.owl-1').owlCarousel({
            loop: true,
            autoplay: 4000,

            margin: 10,
            nav: true,
            navText: ["<img src='/../vanhoa/Views/Content/images/prev.png'>",
                "<img src='../vanhoa/Views/Content/images/next.png'>"
            ],
            thumbs: true,
            thumbsPrerendered: true,
            items: 1,

        })

        $('.owl-2').owlCarousel({
            items: 3,
            autoplay: 8000,
            loop: true,
            thumbs: true,
            margin: 15,
            video: true,
            lazyLoad: true,
            responsive: {
                0: {
                    items: 1
                },
                320: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
        $('.owl-print').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            thumbs: true,
            thumbsPrerendered: true,
            items: 1,

        })
    });
</script>
<script>
    $(document).ready(function () {
        var stickyTop = $('#my-header').offset().top + 100;
        $(window).on('scroll', function () {
            console.log($(window).scrollTop() >= stickyTop ? true : false)
            if ($(window).scrollTop() >= stickyTop) {
                $('#my-nav').addClass("fixed");
                // $('#my-nav').style.top = 0;

            } else {
                $('#my-nav').removeClass("fixed");
            }
        });
    })
</script>

</html>