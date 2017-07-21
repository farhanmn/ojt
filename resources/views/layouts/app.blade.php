<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OJT @yield('title')</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">

    <link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">
    <style type="text/css">
        /*autocomplete selectize*/
        .selectize-input {
          border-radius: 0;
        }
        .selectize-dropdown{
          min-width: 300px;
        }

        /*container margin*/
        .margin-container {
            margin-top: 5%;
            margin-bottom: 5%;
        }

        /*navbar*/
        .top-menu:hover, .a-top:hover {
            text-decoration: underline!important;
        }
        .dropdo {
            background-color: #0033A8!important;
        }
        .nav-top {
            background-color: white;
        }
        .pos-fixed {
            background-color : #0033A8;
        }
        .tab-top {
            border-radius: 0!important;
        }
        .padding-o {
            padding: 0;
        }

        /*nav tab*/
        .nav-tabs.nav-justified > .active > .tab-top {
            border-right-color: #fff!important;
            border-left-color: #fff!important;
            border-top-color: #fff!important;
            border-bottom-color: #0033A8!important;
            border-bottom-width: 2px;
            color: #0033A8!important;
        }
        .nav-tabs.nav-justified > .garis > .tab-top {
            border-color: #fff;
            color: black;
        }
        .nav-tabs.nav-justified > .active > .tab-top:hover {
            border-color: #fff;
        }
        .nav-tabs.nav-justified > li > .tab-top:hover, .nav-tabs.nav-justified > li > .tab-top:focus {
            border-bottom-color: #0033A8;
            border-bottom-width: 2px;
            color: #0033A8;
        }
        .nav > .garis > .tab-top:hover {
            background-color: #fff;
        }
        .form-control-non-radius{
          -webkit-border-radius: 0!important;
             -moz-border-radius: 0!important;
                  border-radius: 0!important;
        }
        .form-control-radius-button{
          -webkit-border-radius: 9px!important;
             -moz-border-radius: 9px!important;
                  border-radius: 9px!important;
        }
        .nav-tabs.nav-justified > .active > .tab-top1 {
            border-right-color: #DDDDDD!important;
            border-left-color: #DDDDDD!important;
            border-top-color: #DDDDDD!important;
            border-bottom-color: #0033A8!important;
            border-bottom-width: 3px;
            color: #0033A8!important;
        }
        .nav-tabs.nav-justified > .garis > .tab-top1 {
            color: black;
        }
        .nav-tabs.nav-justified > .active > .tab-top1:hover {
            border-color: #fff;
        }
        .nav-tabs.nav-justified > li > .tab-top1:hover, .nav-tabs.nav-justified > li > .tab-top1:focus {
            border-bottom-color: #0033A8;
            border-bottom-width: 3px;
            color: #0033A8;
        }
        .nav-tabs.nav-justified > li > .tab-top1 {
            border-color: #DDDDDD;
            color: #0033A8;
            border-radius: 0;
        }
        .nav > .garis > .tab-top1:hover {
            background-color: #fff;
        }
        .panelbordertop{
            border-radius: 0;
        }
        .heading {
            background-color: #fff!important;
        }

        /*card promo*/
        .shad-card:hover {
            box-shadow: 2px 2px 5px 2px #D3D3D3;
        }
        #panel-promo {
            background-color: #efefef;
            border-radius: 0;
            min-height: 70px;
            margin-bottom: 0;
        }
        .mulaidari-card{
          font-weight: bold;
          font-size: 90%;
        }
        #backgroundimage1{
            position: relative;
            z-index: 1;
        }
        #backgroundimage1:before{
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzE9lhunZg-TrtBGKpcaCcx2uX67zrGXpPHST2vu3xqaUATeFX) center center;
            opacity: .6;
        }
        #backgroundimage2{
            position: relative;
            z-index: 1;
        }
        #backgroundimage2:before{
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgCBsEX17W-em2mA2BPcbVoSL-b4sYfyvZU6z2bSmii1S6Rl3dvg) center center;
            opacity: .6;
        }
        #backgroundimage3{
            position: relative;
            z-index: 1;
        }
        #backgroundimage3:before{
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: url(http://1.bp.blogspot.com/-CGnrrLJNcrI/UykTHYXyPII/AAAAAAAAABI/k82D9uq6HBk/s1600/13010380638823_1.jpg) center center;
            opacity: .6;
        }
        #backgroundimage4{
            position: relative;
            z-index: 1;
        }
        #backgroundimage4:before{
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: url(http://www.australia.com/content/australia/pt_br/places/melbourne/_jcr_content/mainParsys/imagewithbutton_0/mainImageSrc.adapt.1620.medium.jpg) center center;
            opacity: .6;
        }

        /*datepicker style*/
        .dp-highlight .ui-state-default {
      		background: #303F9F;
      		color: #fff;
      	}

        /*avability*/
        .panelbody-nonpaddingtb{
          padding-top: 0;
          padding-bottom: 0;
        }
        #filter:hover {
            text-decoration: none;
        }
        .font-filter {
            font-weight: bold;
            margin-right: 4px;
        }

        #dropdown-passenger-mobile {
            min-width: 50px;
            min-height: 100px;
            margin-top: -1px;
            padding: 15px 30%;
        }

        /*//mulai dari sini css buat avabillity*/
        .paneledit{
            padding-top: 3px;
            background-color: #0033a8 !important;
        }
        .tujuan{
            font-size: 16px;
            font-size: 100% !important;
        }
        #strip{
            width: 5%;
        }
        .editmargin{
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
        .warna{
            color: #0033a8;
        }
        .panelbordertop{
            border-top: 0;
            border-radius: 0;
        }
        .konten {
          border: 1px solid #DDDDDD;
        }
        .konten-isi {
          border-top: 1px solid #DDDDDD;
          border-radius: 0;
        }
        .gambar{
            border-radius: 50%;
            width: 50px;
            height: 50px;}
        .btnpilih{
          width: 100%;
          height: 100%;
          margin-bottom: 8%;
        }
        .editmargintop{
          margin-top: 13%;
        }
        .editmargintopharga{
          margin-top: 23%;
        }
        .margintransit{
          margin-top: 25%;
        }
        .margintransitcol3{
          margin-top: 15%;
        }
        .overridecol{
          padding: 0 !important;
          resize: vertical !important;
          overflow: auto !important;
          width: 85% !important;
          margin-bottom: 2%;
          background: #808080;
        }
        .margintoptransit{
          margin-top: 2%;
        }
        .size{
          font-size: 83%;
        }
        .buttonp1{
          border-radius: 0;
          background: #ff1a1a;
          border: 0;
          font-size: 14px;
          padding: 6px 12px;
        }
        .buttone1{
          border-radius: 0;
          background: #1e90ff;
          border: 0;
          font-size: 14px;
          padding: 6px 12px;
        }
        .buttonb1{
          border-radius: 0;
          background: #001F68;
          border: 0;
          font-size: 14px;
          padding: 6px 12px;
        }
        .textcolor{
          color: #ffffff;
        }
        .marginright{
          margin-right: 4%;
        }
        .marginleft{
          margin-left: 4%;
        }
        /*//css buat detail pilih class pesawat*/
        .menu-seat{
          float: left;
          display: table;
          width: 100%;
          margin-bottom: 10px !important;
        }
        .menu-seat-responsive ul {
          list-style-type:none;
          margin:0;
          padding:0;
        }
        .menu-seat li {
          display:inline-block;
          margin-right: 1px;
          display: table-cell;
          padding: 10px;
          border: 1px solid #fff;
        }
        .menu-seat li a {
          display:block;
          min-width:100%;
          height: 100%;
          text-align: center;
          line-height: 50px;
          color: #fff;
          background: #2980B9 !important;
          text-decoration: none;
        }
        .menu-seat li:hover a {
          background: #27AE60 !important;
        }
        .menu-seat li:hover ul a {
          background: #f3f3f3 !important;
          color: #2f3036;
          height: 40px;
          line-height: 40px;
        }
        .menu-seat li:hover ul a:hover {
          background: #27AE60;
          color: #fff;
        }
        .menu-seat-responsive  li ul {
          display: none;
        }
        .menu-seat-responsive  li ul li {
          display: block;
          float: none;
        }
        .menu-seat-responsive  li ul li a {
          width: 100%;
          max-width: 100%;
          min-width: 100%;
          padding: 0 20px;
        }
        .Economy {
            background-color: #1e90ff;
            color: #fff;
        }
        .Bisnis{
          background-color: #001F68;
          color: #fff;
        }
        /*Responsive Styles*/
        @media screen and (max-width : 760px){
          .menu-seat-responsive{
            max-height: 440px;
            overflow-y: scroll;
          }
          .menu-seat li {
            display:inline-block;
            float: left;
            margin-right: 1px;
          }
          ul .menu-seat {
            position: static;
            display: none;
          }
          .menu-seat li {
            margin-bottom: 1px;
          }
          .menu-seat-responsive ul li, .menu-seat li a {
            width: 100%;
          }
        }
        .white-hover, .white-hover:hover, .white-hover:focus{
          color: #fff;
        }

        .Promo{background: #ff1a1a;}
        /*//editan bagian kanan*/
        /*// custom pembayaran keranjang + langsung*/
        .margin5 {
          margin-left: 5%;
          margin-bottom: 5%;
        }
        .margin5-trbl {
          margin-left: 5%;
          margin-bottom: 5%;
          margin-right: 5%;
          margin-bottom: 5%;
        }
        .margin5-left{
          margin-top: 3%;
          margin-left: 5%;
          margin-bottom: -3%;
        }
        .margin5-top{
          margin-top: 3%;
        }
        .card ul .active{
          font-weight: bold;
        }

        /*custom step 1 2 3*/
        /*bayar*/
        .overidenav > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
            border-width: 0;
            border-radius: 0;
        }
        .overidenav > li > a {
            border-radius: 0 !important;
            border: none;
            color: #000;
            background: #ffffff;
        }
        .overidenav > li.active > a, .nav-tabs > li > a:hover {
            border-bottom-style: solid;
            border-bottom-color: #0033a8;
            border-bottom-width: 2px;
            border-radius: 0 !important;
            color: #0033a8 !important;
            background: #fff;
        }
        .overidenav > li > a::after {
            content: "";
            background: #0033a8;
            border-radius: 0 !important;
            height: 3px;
            position: absolute;
            width: 100%;
            left: 0px;
            bottom: -1px;
            transition: all 250ms ease 0s;
            transform: scale(0);
        }
        .overidenav > li.active > a::after, .nav-tabs > a::after {
            transform: scale(1);
        }
        .btn-circle {
          width: 30px;
          height: 30px;
          text-align: center;
          padding: 6px 0;
          font-size: 12px;
          line-height: 1.428571429;
          border-radius: 15px;
        }
        .btn-circle.btn-lg {
          width: 40px;
          height: 40px;
          padding: 8px 14px;
          font-size: 18px;
          line-height: 1.33;
          border-radius: 25px;
        }
        .btn-circle.btn-xl {
          width: 70px;
          height: 70px;
          padding: 10px 16px;
          font-size: 24px;
          line-height: 1.33;
          border-radius: 35px;
        }

        /*//custom color*/
        .primary-blue{
          background-color: #0033a8 !important;
          color: white !important;
        }
        .primary-blue:hover{
          background-color: #002988 !important;
          color: white !important;
        }
        .dark-blue{
          background-color: #001F68 !important;
          color: white;
        }
        .primary-yellow{
          background-color: #FFA900 !important;
          color: white;
        }
        .third-blue{
          background-color: #1e90ff !important;
          color: white;
        }
        .second-blue{
          background-color: #0986FF !important;
          color: white;
        }
        .grey{
          background-color: #8f8f8f !important;
          color: white;
        }
        .line{
          height: 3px;
        }

    /*toast position*/
        .toast-top-center {
          margin-top: 7%;
        }
        #toast-container > .toast-error {
          background-image: none!important;
        }

        /*//custom trip summary*/
        .hr {
        height: 1px;
        color: #333;
        background-color: #333;
        }

        /*//custom bagasi*/
        .margin2-top{
          margin-top:2%;
        }
        .margin8-top{
          margin-top: 30%;
        }
        .buled {
         width: 20px;
         height: 20px;
         border: #0033a8 2px solid;
         -moz-border-radius: 70px;
         -webkit-border-radius: 70px;
         border-radius: 70px;
        }
        .kotak{
          margin-top:47%;
          background:#e1e1e1;
          margin-left:14%;
          border: 1px solid #8f8f8f;
          position:absolute;
          height: 5%;
          width:52%;
          text-align:center;
        }
        .scroll{
          white-space: nowrap;
          position: fixed;
          overflow: auto;
          bottom: 0;
          left: 0;
          right: 0;
          -webkit-overflow-scrolling:touch;
          -ms-overflow-style: -ms-autohiding-scrollbar;
        }
        .buttonNav{
          background: #0033A8;
          color: white;
          border: 1px solid #7D7D7D;
          margin: 0px;
          }

        /*//custom trip summary*/
        .garis-non-transit{
            height: 75%;
            background: #0033a8;
            position: absolute;
            width: 2px;
            margin: 0 auto;
            left: 4%;
            right: 0;
            z-index: 1;
        }
        .garis-transit{
            height: 40%;
            background: #0033a8;
            position: absolute;
            width: 2px;
            margin: 0 auto;
            left: 4%;
            right: 0;
            z-index: 1;
        }
        .foto{
          height: 200px;
          width: 200px;
          border: 1px #8f8f8f solid;
          background-color: #8f8f8f;
        }

    </style>


</head>
<body id="app-layout">
    <div class="navbar hidden-xs hidden-sm navbar-default nav-top navbar-static-top">
        <div class="container">
            <!-- Right Side Of Navbar 1 -->
            <div class="col-xs-offset-6">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" class="a-top">FAQ</a></li>

                <li class="dropdown">
                  <a href="#" class="a-top dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="famfamfam-flags id" style="margin-top:5px; margin-left:-10px"></div></a>
                  <ul class="dropdown-menu">
                    <li><a href="#" class="a-top dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><div class="famfamfam-flags eg" style="margin-top:5px; display: inline"></div> Indonesia</a></li>
                  </ul>
                </li>

            </ul>
            </div>
        </div>
    </div>
    <nav id="menu" class="navbar navbar-default pos navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar" style="background-color: white"></span>
                    <span class="icon-bar" style="background-color: white"></span>
                    <span class="icon-bar" style="background-color: white"></span>
                </button>

                <!-- Branding Image on Navbar 2 -->
                <a href="{{ url('/') }}"><img  class="hidden-xs" src="https://citos.id/assets/images/logo.svg" style="width: 120px; height: auto; margin: 6% 0;"></a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Right Side Of Navbar 2 -->
                <ul class="nav navbar-nav navbar-right">
                   <!-- Authentication Links -->
                   <!-- if as guest -->
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}" class="top-menu">Promo</a></li>
                        <li class="dropdown">
                        <!-- login dropdown -->
                        <a href="#" class="dropdown-toggle dropdo top-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Masuk <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-login">
                               <div class="panel pan panel-default">
                                    <div class="panel-heading" style="background-color: #fff">
                                        <!-- title -->
                                        <h3 class="panel-title"><b>Masuk ke Akun Anda</b></h3>
                                    </div>
                                    <div class="panel-body">
                                        <!-- form sign in -->
                                        <form accept-charset="UTF-8" role="form" action="{{ url('/login') }}" method="POST">
                                        {{ csrf_field() }}
                                        <fieldset>
                                            <div class="form-group">
                                                <!-- email -->
                                                <input id="email" class="form-control" placeholder="Email" name="email" type="email" value="{{ old('email') }}">
                                            </div>
                                            <div class="form-group">
                                            <!-- password -->
                                                <input id="password" class="form-control" placeholder="Password" name="password" type="password">
                                            </div>
                                            <div class="form-control-static">
                                            <!-- forgot password -->
                                                <span class="pull-right"><a href="#">Lupa password</a></span>
                                            </div>
                                            <center>
                                                <div class="form-inline">
                                                <!-- button success login -->
                                                <button type="submit" class="btn btn-primary">
                                                    Berhasil Masuk
                                                </button>
                                                <!-- button failed login -->
                                                <a href="{{ url('/login') }}">
                                                <button type="button" class="btn btn-primary">
                                                    Gagal Masuk
                                                </button>
                                                </a>
                                                </div>
                                            </center>
                                        </fieldset>
                                        </form>
                                        <center>
                                            <div class="form-control-static bottom">
                                                <!-- login with g+ -->
                                                <a class="btn btn-danger btn-md" style="width: 40px" href="#">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                                <!-- login with facebook -->
                                                <a class="btn btn-primary btn-md" style="width: 40px" rel="publisher"
                                                   href="#">
                                                    <i class="fa fa-facebook-official"></i>
                                                </a>
                                            </div>
                                            <div class="form-control-static">
                                                <!-- not have account -->
                                                <span>Belum punya akun? <a href="{{ url('/register') }}">Daftar</a></span>
                                            </div>
                                        </center>
                                    </div>
                                </div>

                          </ul>
                        </li>
                    <!-- if has been login -->
                    @else
                        <li><a href="#" class="top-menu">Promo</a></li>
                        <li><a href="#" class="top-menu"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="top-menu"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></a></li>
                        <li class="dropdown">
                        <!-- dropdown account -->
                            <a href="#" class="dropdown-toggle dropdo top-menu" data-toggle="dropdown" role="button" aria-expanded="false">
                                Akun <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-login" role="menu">
                                <div class="panel pan panel-default">
                                    <div class="panel-heading" style="background-color: #fff; min-height: 100px">
                                        <div class="col-lg-4">
                                        <!-- user avatar -->
                                            <img src="https://openclipart.org/download/247319/abstract-user-flat-3.svg" style="width: 80px; height: auto;">
                                        </div>
                                        <div class="col-lg-8" style="padding: 20px 0 20px 3px">
                                        <!-- name and hot wallet -->
                                            <h3 class="panel-title">Mr. Muhammad Zivar</h3>
                                            <span>Hot Wallet: 0</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- list action -->
                                <li><a href="#">Booking List</a></li>
                                <li><a href="#">Edit Akun</a></li>
                                <li><a href="{{ url('/logout') }}">Keluar</a></li>
                                <div class="panel pan panel-default"></div>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div id="content"></div>

    @yield('content')

<div class="footer visible-xs" style="background-color: #7D7D7D">
  <div class="footer" style="background-color: #7D7D7D">
    <a href="{{ url('/') }}"><img   src="https://citos.id/assets/images/logo.svg" style="width: 120px; height: auto;display:block; margin: auto;"></a>
  </div>
  <div class="footer" style="background-color: #7D7D7D">
    <center >
      <a href="#" style="color:white">Tentang Kami</a>
      <span >|</span>
      <a href="#" style="color:white">custumer Support</a>
      <br>
      <span>&copy 2017 | All Rights Reservered</span>
      <br>
      <br>
      <br>
    </center>
  </div>
</div>

    <!-- footer -->
    <div class="footer col-md-12 hidden-xs">
    <!-- section 1 : logo, address, and copyright -->
      <div class="col-lg-3">
        <img class="hidden-xs" src="https://citos.id/assets/images/logo.svg" style="width: 120px; height: auto; margin: 6% 0;">
        <span class="kontenFooterTitle">GRAHA CITOS</span>
        <span class="kontenFooterTitle">Jl. Wakhid Hasyim No. 95-97 Yogyakarta</span>
        <span class="kontenFooterTitle"> &copy 2017 | All Right Reserved </span>
      </div>

    <!-- section 2 -->
      <div class="col-lg-3">
        <a href="#" class="kontenFooter">Bantuan</a>
        <a href="#" class="kontenFooter">Kemitraan</a>
        <a href="#" class="kontenFooter">Karir</a>
        <a href="#" class="kontenFooter">Kebijakan Privasi</a>
        <a href="#" class="kontenFooter">Syarat dan Ketentuan</a>
      </div>

    <!-- section 3 : payment partner -->
      <div class="col-lg-3">
        <span class="kontenFooterTitle">Partner Pembayaran</span>
        <div class="circle">

        </div>
        <div class="circle">

        </div>
        <div class="circle">

        </div>
    </div>

    <!-- section 4 : CS -->
      <div class="col-lg-3">
        <span class="kontenFooterTitle">Custumer Support</span>
        <a href="#" class="kontenFooter">(0274) 2871-777 / 389 529</a>
        <a href="#" class="kontenFooter">cs@citos.id</a>
        <div class="circle">
        </div>
        <div class="circle">
        </div>
        <div class="circle">
        </div>
        <div class="circle">
        </div>
        <div class="circle">
        </div>


      </div>

    </div>
    <!-- JavaScripts -->
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script> -->
    <script type="text/javascript">
    // navbar fixed
        $(document).ready(function () {
            var menu = $('#menu');
            var origOffsetY = menu.offset().top;
            function scroll() {
                if ($(window).scrollTop() >= origOffsetY) {
                    $('#menu').removeClass('pos').addClass('navbar-fixed-top').addClass('pos-fixed');
                    $('#content').addClass('padding-top');
                } else {
                    $('#menu').removeClass('navbar-fixed-top').removeClass('pos-fixed').addClass('pos');
                    $('#content').removeClass('padding-top');
                }
            }
            document.onscroll = scroll;
        });

      // input penumpang
          $(function(){
            $("#inputpenumpang").hover(function () {
              $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(0);
              }, function() {
              $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(0);
              });
            });

      // Citos Shield tooltip
          $('#tooltip').tooltip({
            placement: 'right'
          });

      // show-hide password
          $('#show-pass').click(function(){
            if ($('#show-pass').find(".fa").hasClass('fa-eye')) {
                $('#show-pass').find(".fa").removeClass('fa-eye').addClass('fa-eye-slash');
                $('#value-pass').attr("type", "text");
            }else {
                $('#show-pass').find(".fa").removeClass('fa-eye-slash').addClass('fa-eye');
                $('#value-pass').attr("type", "password");
            }
          });

      // return date
          $('#show-check').click(function(){
            if ($('#show-check').find(".fa").hasClass('fa-square')) {
                $('#show-check').find(".fa").removeClass('fa-square').addClass('fa-check-square-o');
                $('#show-check').find(".fa").css("color", "black");
                $('#show-check').css("background-color", "white");
                $('#iconpulang').css("background-color", "white");
            }else {
                $('#show-check').find(".fa").removeClass('fa-check-square-o').addClass('fa-square');
                $('#show-check').find(".fa").css("color", "white");
                $('#show-check').css("background-color", "#EEEEEE");
                $('#iconpulang').css("background-color", "#EEEEEE");
            }
            if (document.getElementById('inputdatepulg').disabled) {
                document.getElementById('inputdatepulg').disabled=false;
            }else {
                document.getElementById('inputdatepulg').disabled=true;
            }
          });

      // flight price
        $('input[name="pesawat-1"]').on('click change', function() {
            var nilai = $("input[name='pesawat-1']:checked").val();
            $('.hargapesawat1').text(nilai);
        });
        $('input[name="pesawat-2"]').on('click change', function() {
            var nilai = $("input[name='pesawat-2']:checked").val();
            $('.hargapesawat2').text(nilai);
        });
        $('input[name="pesawat-3"]').on('click change', function() {
            var nilai = $("input[name='pesawat-3']:checked").val();
            $('.hargapesawat3').text(nilai);
        });
        $('input[name="pesawat-4"]').on('click change', function() {
            var nilai = $("input[name='pesawat-4']:checked").val();
            $('.hargapesawat4').text(nilai);
        });
        $('input[name="pesawat-5"]').on('click change', function() {
            var nilai = $("input[name='pesawat-5']:checked").val();
            $('.hargapesawat5').text(nilai);
        });
        $('input[name="pesawat-6"]').on('click change', function() {
            var nilai = $("input[name='pesawat-6']:checked").val();
            $('.hargapesawat6').text(nilai);
        });

    // input name
        $('#same-contact').change(function(){
          if (document.getElementById('same-contact').checked) {
            var val = $('#contact-name-input').val();
            $('#input-pax-1').val(val);
          }else{
            $('#input-pax-1').val('');
          }
        });
        $('#contact-name-input').on('input',function(){
          if (document.getElementById('same-contact').checked) {
            var val = $('#contact-name-input').val();
            $('#input-pax-1').val(val);
          }else{
            $('#input-pax-1').val('');
          }
        });

    // collapse only 1 per content flight
        $('#konten1').on('show.bs.collapse','.collapse', function() {
            $('#konten1').find('.collapse.in').collapse('hide');
        });
        $('#konten2').on('show.bs.collapse','.collapse', function() {
            $('#konten2').find('.collapse.in').collapse('hide');
        });
        $('#konten3').on('show.bs.collapse','.collapse', function() {
            $('#konten3').find('.collapse.in').collapse('hide');
        });
        $('#konten4').on('show.bs.collapse','.collapse', function() {
            $('#konten4').find('.collapse.in').collapse('hide');
        });
        $('#konten5').on('show.bs.collapse','.collapse', function() {
            $('#konten5').find('.collapse.in').collapse('hide');
        });
        $('#konten6').on('show.bs.collapse','.collapse', function() {
            $('#konten6').find('.collapse.in').collapse('hide');
        });
        
        //accordion di bagasi
        $('#accordion').on('show.bs.collapse','.collapse', function() {
            $('#accordion').find('.collapse.in').collapse('hide');
        });
    // true flight clone
    var badgeCount=[0,0];
    var allowed=[false,false];
    var pesawat=[false, false, false, false,false,false];
    var jenispesawat = [false, false];
        $('#pilihpesawat1').click(function(){
          if (!jenispesawat['lion'] || $('#pilihpesawat1').is('.active')) {
            jenispesawat['lion']=true;
            $('#konten1').find('.collapse.in').collapse('hide');
            if (!pesawat[0]) {
              var div = $('#kontenDiv1'),
              clone = div.clone().appendTo("#listy-depart");
              clone.attr("id", "cloning-flight-1");
              clone.empty();
              clone.removeClass();
              clone.attr("style","padding-top: 10px; padding-bottom: 10px; border-bottom: 1px solid #DDDDDD");
              clone.addClass('row');
              clone.append("<div class='col-lg-7'><span>Batik Air</span><br><span>21.00 - 00.17 (+1d)</span></div><div class='col-lg-4'><b><span class='hargapesawat1 pull-right' style='font-size: 18px'>Rp. 1.300.000</span></b></div><div class='col-lg-1'><span class='close' onClick='hapuspesawat1()' style='margin-top: -3px'>x</span></div>");
              var nilai = $("input[name='pesawat-1']:checked").val();
              clone.find('.hargapesawat1').text(nilai);
              badgeCount[0]++;
              $('#badge-depart').text(badgeCount[0]);
              $('#kontenDiv1').css("cssText", "background-color:grey!important;");
              $('#pilihpesawat1').addClass('active');
              $( "a#pesawat1detail" ).replaceWith("<p class='small' id='detail1'>Detail</p>");
              $( "a#pesawat1pilih" ).replaceWith("<p class='small' id='pilih1'>Pilih Kelas Lain?</p>");
              pesawat[0]=true;
              allowed[0]=true;
            }
            if (allowed[0] && allowed[1]) {
              $('#editbtn').removeAttr("disabled");
            }
          }else {
            toastr.error("Anda tidak dapat memilih maskapai dalam 1 grup yang sama", "", {
              "closeButton": false,
              "debug": false,
              "newestOnTop": false,
              "progressBar": false,
              "positionClass": "toast-top-center",
              "preventDuplicates": true,
              "onclick": null,
              "showDuration": "300",
              "hideDuration": "1000",
              "timeOut": "2000",
              "extendedTimeOut": "1000",
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            }).css("cssText","width: 500px; margin-bottom: 10px;");
          }
        })

        $('#pilihpesawat2').click(function(){
          if (!jenispesawat['lion'] || $('#pilihpesawat2').is('.active')) {
            jenispesawat['lion']=true;
            $('#konten2').find('.collapse.in').collapse('hide');
            if (!pesawat[1]) {
              var div = $('#kontenDiv2'),
              clone = div.clone().appendTo("#listy-depart");
              clone.attr("id", "cloning-flight-2");
              clone.empty();
              clone.removeClass();
              clone.attr("style","padding-top: 10px; padding-bottom: 10px; border-bottom: 1px solid #DDDDDD");
              clone.addClass('row');
              clone.append("<div class='col-lg-7'><span>Lion Air</span><br><span>21.00 - 00.17 (+1d)</span></div><div class='col-lg-4'><span class='hargapesawat2 pull-right'>Rp. 1.300.000</span></div><div class='col-lg-1'><span class='close' onClick='hapuspesawat2()' style='margin-top: -3px'>x</span></div>");
              var nilai = $("input[name='pesawat-2']:checked").val();
              clone.find('.hargapesawat2').text(nilai);
              badgeCount[0]++;
              $('#badge-depart').text(badgeCount[0]);
              $('#kontenDiv2').css("cssText", "background-color:grey!important;");
              $('#pilihpesawat2').addClass('active');
              $( "a#pesawat2detail" ).replaceWith("<p class='small' id='detail2'>Detail</p>");
              $( "a#pesawat2pilih" ).replaceWith("<p class='small' id='pilih2'>Pilih Kelas Lain?</p>");
              pesawat[1]=true;
              allowed[0]=true;
            }
            if (allowed[0] && allowed[1]) {
              $('#editbtn').removeAttr("disabled");
            }
          }else {
            toastr.error("Anda tidak dapat memilih maskapai dalam 1 grup yang sama", "", {
              "closeButton": false,
              "debug": false,
              "newestOnTop": false,
              "progressBar": false,
              "positionClass": "toast-top-center",
              "preventDuplicates": true,
              "onclick": null,
              "showDuration": "300",
              "hideDuration": "1000",
              "timeOut": "2000",
              "extendedTimeOut": "1000",
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            }).css("cssText","width: 500px; margin-bottom: 10px;");
          }
        })

        $('#pilihpesawat3').click(function(){
          $('#konten3').find('.collapse.in').collapse('hide');
          if (!pesawat[2]) {
            var div = $('#kontenDiv3'),
            clone = div.clone().appendTo("#listy-depart");
            clone.attr("id", "cloning-flight-3");
            clone.empty();
            clone.removeClass();
            clone.attr("style","padding-top: 10px; padding-bottom: 10px; border-bottom: 1px solid #DDDDDD");
            clone.addClass('row');
            clone.append("<div class='col-lg-7'><span>Jet Star</span><br><span>21.00 - 00.17 (+1d)</span></div><div class='col-lg-4'><span class='hargapesawat3 pull-right'>Rp. 1.300.000</span></div><div class='col-lg-1'><span class='close' onClick='hapuspesawat3()' style='margin-top: -3px'>x</span></div>");
            var nilai = $("input[name='pesawat-3']:checked").val();
            clone.find('.hargapesawat3').text(nilai);
            badgeCount[0]++;
            $('#badge-depart').text(badgeCount[0]);
            $('#kontenDiv3').css("cssText", "background-color:grey!important;");
            $('#pilihpesawat3').addClass('active');
            $( "a#pesawat3detail" ).replaceWith("<p class='small' id='detail3'>Detail</p>");
            $( "a#pesawat3pilih" ).replaceWith("<p class='small' id='pilih3'>Pilih Kelas Lain?</p>");
            pesawat[1]=true;
            allowed[0]=true;
          }
          if (allowed[0] && allowed[1]) {
            $('#editbtn').removeAttr("disabled");
          }
        })

        $('#pilihpesawat4').click(function(){
          $('#konten4').find('.collapse.in').collapse('hide');
            if (!pesawat[3]) {
              var div = $('#kontenDiv4'),
              clone = div.clone().appendTo("#listy-return");
              clone.attr("id", "cloning-flight-4");
              clone.empty();
              clone.removeClass();
              clone.attr("style","padding-top: 10px; padding-bottom: 10px; border-bottom: 1px solid #DDDDDD");
              clone.addClass('row');
              clone.append("<div class='col-lg-7'><span>Kalstar Aviation</span><br><span>21.00 - 00.17 (+1d)</span></div><div class='col-lg-4'><span class='hargapesawat4 pull-right'>Rp. 1.300.000</span></div><div class='col-lg-1'><span class='close' onClick='hapuspesawat4()' style='margin-top: -3px'>x</span></div>");
              var nilai = $("input[name='pesawat-4']:checked").val();
              clone.find('.hargapesawat4').text(nilai);
              badgeCount[1]++;
              $('#badge-return').text(badgeCount[1]);
              $('#kontenDiv4').css("cssText", "background-color:grey!important;");
              $('#pilihpesawat4').addClass('active');
              $( "a#pesawat4detail" ).replaceWith("<p class='small' id='detail4'>Detail</p>");
              $( "a#pesawat4pilih" ).replaceWith("<p class='small' id='pilih4'>Pilih Kelas Lain?</p>");
              pesawat[3]=true;
              allowed[1]=true;
            }
            if (allowed[0] && allowed[1]) {
              $('#editbtn').removeAttr("disabled");
            }
        })

        $('#pilihpesawat5').click(function(){
          $('#konten5').find('.collapse.in').collapse('hide');
            if (!pesawat[4]) {
              var div = $('#kontenDiv5'),
              clone = div.clone().appendTo("#listy-return");
              clone.attr("id", "cloning-flight-5");
              clone.empty();
              clone.removeClass();
              clone.attr("style","padding-top: 10px; padding-bottom: 10px; border-bottom: 1px solid #DDDDDD");
              clone.addClass('row');
              clone.append("<div class='col-lg-7'><span>Lion Air</span><br><span>21.00 - 00.17 (+1d)</span></div><div class='col-lg-4'><span class='hargapesawat5 pull-right'>Rp. 1.300.000</span></div><div class='col-lg-1'><span class='close' onClick='hapuspesawat5()' style='margin-top: -3px'>x</span></div>");
              var nilai = $("input[name='pesawat-5']:checked").val();
              clone.find('.hargapesawat5').text(nilai);
              badgeCount[1]++;
              $('#badge-return').text(badgeCount[1]);
              $('#kontenDiv5').css("cssText", "background-color:grey!important;");
              $('#pilihpesawat5').addClass('active');
              $( "a#pesawat5detail" ).replaceWith("<p class='small' id='detail5'>Detail</p>");
              $( "a#pesawat5pilih" ).replaceWith("<p class='small' id='pilih5'>Pilih Kelas Lain?</p>");
              pesawat[4]=true;
              allowed[1]=true;
            }
            if (allowed[0] && allowed[1]) {
              $('#editbtn').removeAttr("disabled");
            }
        })
        $('#pilihpesawat6').click(function(){
          $('#konten6').find('.collapse.in').collapse('hide');
            if (!pesawat[5]) {
              var div = $('#kontenDiv6'),
              clone = div.clone().appendTo("#listy-return");
              clone.attr("id", "cloning-flight-6");
              clone.empty();
              clone.removeClass();
              clone.attr("style","padding-top: 10px; padding-bottom: 10px; border-bottom: 1px solid #DDDDDD");
              clone.addClass('row');
              clone.append("<div class='col-lg-7'><span>Jet Star</span><br><span>21.00 - 00.17 (+1d)</span></div><div class='col-lg-4'><span class='hargapesawat6 pull-right'>Rp. 1.300.000</span></div><div class='col-lg-1'><span class='close' onClick='hapuspesawat6()' style='margin-top: -3px'>x</span></div>");
              var nilai = $("input[name='pesawat-6']:checked").val();
              clone.find('.hargapesawat6').text(nilai);
              badgeCount[1]++;
              $('#badge-return').text(badgeCount[1]);
              $('#kontenDiv6').css("cssText", "background-color:grey!important;");
              $('#pilihpesawat6').addClass('active');
              $( "a#pesawat6detail" ).replaceWith("<p class='small' id='detail6'>Detail</p>");
              $( "a#pesawat6pilih" ).replaceWith("<p class='small' id='pilih6'>Pilih Kelas Lain?</p>");
              pesawat[4]=true;
              allowed[1]=true;
            }
            if (allowed[0] && allowed[1]) {
              $('#editbtn').removeAttr("disabled");
            }
        })

        function hapuspesawat1(){
          $("#cloning-flight-1").last().remove();
          $('#kontenDiv1').css("cssText", "background-color:;border-top: 1px solid #DDDDDD");
          $('#pilihpesawat1').removeClass('active');
          $( "#detail1" ).replaceWith("<a data-toggle = 'collapse' id='pesawat1detail' href='#headingkonten1'><p class='small' id='detail1'>Detail</p></a>");
          $( "#pilih1" ).replaceWith("<a data-toggle='collapse' id='pesawat1pilih' href='#headingpilih1'><p class='small' id='pilih1' >Pilih Kelas Lain?</p></a>");
          badgeCount[0]--;
          if (badgeCount[0]==0) {
            allowed[0]=false;
          }
          $('#badge-depart').text(badgeCount[0]);
          pesawat[0]=false;
          if (!allowed[0] || !allowed[1]) {
            $('#editbtn').attr("disabled","true");
          }
          jenispesawat['lion']=false;
        };
        function hapuspesawat2(){
          $("#cloning-flight-2").last().remove();
          $('#kontenDiv2').css("cssText", "background-color:;");
          $('#pilihpesawat2').removeClass('active');
          $( "#detail2" ).replaceWith("<a data-toggle = 'collapse' id='pesawat2detail' href='#headingkonten2'><p class='small' id='detail2'>Detail</p></a>");
          $( "#pilih2" ).replaceWith("<a data-toggle='collapse' id='pesawat2pilih' href='#headingpilih2'><p class='small' id='pilih2' >Pilih Kelas Lain?</p></a>");
          badgeCount[0]--;
          if (badgeCount[0]==0) {
            allowed[0]=false;
          }
          $('#badge-depart').text(badgeCount[0]);
          pesawat[1]=false;
          if (!allowed[0] || !allowed[1]) {
            $('#editbtn').attr("disabled","true");
          }
          jenispesawat['lion']=false;
        };
        function hapuspesawat3(){
          $("#cloning-flight-3").last().remove();
          $('#kontenDiv3').css("cssText", "background-color:;");
          $('#pilihpesawat3').removeClass('active');
          $( "#detail3" ).replaceWith("<a data-toggle = 'collapse' id='pesawat3detail' href='#headingkonten3'><p class='small' id='detail3'>Detail</p></a>");
          $( "#pilih3" ).replaceWith("<a data-toggle='collapse' id='pesawat3pilih' href='#headingpilih3'><p class='small' id='pilih3' >Pilih Kelas Lain?</p></a>");
          badgeCount[0]--;
          if (badgeCount[0]==0) {
            allowed[0]=false;
          }
          $('#badge-depart').text(badgeCount[0]);
          pesawat[2]=false;
          if (!allowed[0] || !allowed[1]) {
            $('#editbtn').attr("disabled","true");
          }
        };
        function hapuspesawat4(){
          $("#cloning-flight-4").last().remove();
          $('#kontenDiv4').css("cssText", "background-color:;");
          $('#pilihpesawat4').removeClass('active');
          $( "#detail4" ).replaceWith("<a data-toggle = 'collapse' id='pesawat4detail' href='#headingkonten4'><p class='small' id='detail4'>Detail</p></a>");
          $( "#pilih4" ).replaceWith("<a data-toggle='collapse' id='pesawat4pilih' href='#headingpilih4'><p class='small' id='pilih4' >Pilih Kelas Lain?</p></a>");
          badgeCount[1]--;
          if (badgeCount[1]==0) {
            allowed[1]=false;
          }
          if (!allowed[0] || !allowed[1]) {
            $('#editbtn').attr("disabled","true");
          }
          $('#badge-return').text(badgeCount[1]);
          pesawat[3]=false;
        };
        function hapuspesawat5(){
          $("#cloning-flight-5").last().remove();
          $('#kontenDiv5').css("cssText", "background-color:;");
          $('#pilihpesawat5').removeClass('active');
          $( "#detail5" ).replaceWith("<a data-toggle = 'collapse' id='pesawat5detail' href='#headingkonten5'><p class='small' id='detail5'>Detail</p></a>");
          $( "#pilih5" ).replaceWith("<a data-toggle='collapse' id='pesawat5pilih' href='#headingpilih5'><p class='small' id='pilih5' >Pilih Kelas Lain?</p></a>");
          badgeCount[1]--;
          if (badgeCount[1]==0) {
            allowed[1]=false;
          }
          if (!allowed[0] || !allowed[1]) {
            $('#editbtn').attr("disabled","true");
          }
          $('#badge-return').text(badgeCount[1]);
          pesawat[4]=false;
        };
        function hapuspesawat6(){
          $("#cloning-flight-6").last().remove();
          $('#kontenDiv6').css("cssText", "background-color:;");
          $('#pilihpesawat6').removeClass('active');
          $( "#detail6" ).replaceWith("<a data-toggle = 'collapse' id='pesawat6detail' href='#headingkonten6'><p class='small' id='detail6'>Detail</p></a>");
          $( "#pilih6" ).replaceWith("<a data-toggle='collapse' id='pesawat6pilih' href='#headingpilih6'><p class='small' id='pilih6' >Pilih Kelas Lain?</p></a>");
          badgeCount[1]--;
          if (badgeCount[1]==0) {
            allowed[1]=false;
          }
          if (!allowed[0] || !allowed[1]) {
            $('#editbtn').attr("disabled","true");
          }
          $('#badge-return').text(badgeCount[1]);
          pesawat[5]=false;
        }

    // form-pass not perfect yet
        $('#contact-name-input').on('input', function(){
          var panjang = $('#contact-name-input').val().length;
          var maxlength = parseInt($('#contact-name-input').attr('maxlength'))+1;
          if ($('#contact-name-input').val()[panjang-1]===' ') {
            console.log("masuk");
            $('#contact-name-input').attr('maxlength', maxlength);
          }
        });

    // selectize function
        var $select = $('#inputdari').selectize({
            maxItems: 1,
            valueField: ['cityiata'],
            searchField: ['city','airport','iata'],
            sortField: [
                {
                    field: 'city',
                    direction: 'asc'
                },
            ],
            options: [
                {id: 1, city: 'Yogyakarta', airport: 'Adi Sucipto', iata: 'JOG', cityiata: 'Yogyakarta (JOG)'},
                {id: 2, city: 'Jakarta', airport: 'Halim Perdana Kusuma', iata: 'HLM', cityiata: 'Jakarta (HLM)'},
                {id: 3, city: 'Medan', airport: 'Kualanamu', iata: 'KNO', cityiata: 'Medan (KNO)'},
                {id: 3, city: 'Surabaya', airport: 'Juanda', iata: 'SUB', cityiata: 'Surabaya (SUB)'},
            ],
            render: {
                option: function(data, escape) {
                    return '<div class="option">' +
                            '<span class="city">' + escape(data.city) + '</span><span> - </span>' +
                            '<span class="airport">' + escape(data.airport) + ' (' + escape(data.iata) + ')</span>' +
                        '</div>';
                },
                item: function(data, escape) {
                    return '<div class="itemhasil">' + escape(data.city) + ' (' + escape(data.iata) +')</div>';
                }
            }
        });
        var $select2 = $('#inputke').selectize({
            maxItems: 1,
            valueField: ['cityiata'],
            searchField: ['city','airport','iata'],
            sortField: [
                {
                    field: 'city',
                    direction: 'asc'
                },
            ],
            options: [
              {id: 1, city: 'Yogyakarta', airport: 'Adi Sucipto', iata: 'JOG', cityiata: 'Yogyakarta (JOG)'},
              {id: 2, city: 'Jakarta', airport: 'Halim Perdana Kusuma', iata: 'HLM', cityiata: 'Jakarta (HLM)'},
              {id: 3, city: 'Medan', airport: 'Kualanamu', iata: 'KNO', cityiata: 'Medan (KNO)'},
              {id: 3, city: 'Surabaya', airport: 'Juanda', iata: 'SUB', cityiata: 'Surabaya (SUB)'},
            ],
            render: {
                option: function(data, escape) {
                    return '<div class="option">' +
                            '<span class="city">' + escape(data.city) + '</span><span> - </span>' +
                            '<span class="airport">' + escape(data.airport) + ' (' + escape(data.iata) + ')</span>' +
                        '</div>';
                },
                item: function(data, escape) {
                    return '<div class="itemhasil">' + escape(data.city) + ' (' + escape(data.iata) +')</div>';
                }
            }
        });
    // auto open returning flight
        $select[0].selectize.on('blur', function(){
            $select2[0].selectize.open();
        })
        $select2[0].selectize.on('blur', function(){
            $('#inputdate').datepicker('show');
        })
    // default value
        $select[0].selectize.setValue("Surabaya (SUB)");
        $select2[0].selectize.setValue("Jakarta (HLM)");

    </script>
    <script type="text/javascript">

    // datepicker BoD
    $( "#BoD-Adt" ).datepicker({
        dateFormat:"yy-mm-dd",
        changeMonth: true,
        changeYear: true,
    });
    $( "#BoD-Chd" ).datepicker({
        dateFormat:"yy-mm-dd",
        changeMonth: true,
        changeYear: true,
    });
    $( "#BoD-Inf" ).datepicker({
        dateFormat:"yy-mm-dd",
        changeMonth: true,
        changeYear: true,
    });

    //datepicker
    $(function() {
        dpmode='';
        var startDate='0';
        var endDate='0';
        $( "#inputdate" ).datepicker({
            minDate: 0,
            dateFormat:"yy-mm-dd",
            changeMonth: true,
            numberOfMonths: 2,
            beforeShow:function(input, calendar){
                menuLocked=true;
                dpmode='depart';
            },
            beforeShowDay: function(date) {
                if(date.toString().indexOf('Sun ')!=-1)
        					return [1,'red'];else
        					return [1];
                var date1 = $.datepicker.parseDate("yy-mm-dd", $("#inputdate").val());
                var date2 = $.datepicker.parseDate("yy-mm-dd", $("#inputdatepulg").val());
                return [true, date1 && date2 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];

            },
            onClose: function( selectedDate ) {
                $( "#inputdatepulg" ).datepicker( "option", "minDate", selectedDate );
                if (!document.getElementById('inputdatepulg').disabled) {
                    $('#inputdatepulg').datepicker('show');
                }else{
                  $("#inputpenumpang").find('.dropdown-menu').stop(true, true).delay(0).fadeIn(0);
                }

                startDate = selectedDate;
            }
        });
        $( "#inputdatepulg" ).datepicker({
            dateFormat:"yy-mm-dd",
            minDate:2,
            setDate: new Date(),
            changeMonth: true,
            numberOfMonths: 2,
            beforeShow:function(){
                dpmode='return';
            },
            beforeShowDay: function(date) {
                if(date.toString().indexOf('Sun ')!=-1)
        					return [1,'red'];else
        					return [1];
                var date1 = $.datepicker.parseDate("yy-mm-dd", $("#inputdate").val());
                var date2 = $.datepicker.parseDate("yy-mm-dd", $("#inputdatepulg").val());
                return [true, date1 && date2 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
            },
            onClose: function( selectedDate ) {
                $( "#inputdate" ).datepicker( "option", "maxDate", selectedDate );
                $("#inputpenumpang").find('.dropdown-menu').stop(true, true).delay(0).fadeIn(0);
                endDate = selectedDate;
            }
        });

        $('#ui-datepicker-div').delegate('.ui-datepicker-calendar td', 'mouseover', function() {
            if ($(this).data('year')==undefined)return;
            if (dpmode=='depart' && endDate=='0')return;
            if (dpmode=='return' && startDate=='0')return;

            var currentDate = $(this).data('year')+'-'+($(this).data('month')+1)+'-'+$('a',this).html();
            currentDate = $.datepicker.parseDate("yy-mm-dd",currentDate).getTime();
            if (dpmode=='depart') {
                var StartDate = currentDate;
                var EndDate = $.datepicker.parseDate("yy-mm-dd",endDate).getTime();
            }else{
                var StartDate = $.datepicker.parseDate("yy-mm-dd",startDate).getTime();
                var EndDate = currentDate;
            };
            $('#ui-datepicker-div td').each(function(index, el) {
                if ($(this).data('year')==undefined)return;

                var currentDate = $(this).data('year')+'-'+($(this).data('month')+1)+'-'+$('a',this).html();

                currentDate=$.datepicker.parseDate("yy-mm-dd",currentDate).getTime();
                if (currentDate >= StartDate && currentDate <= EndDate) {
                    $(this).addClass('dp-highlight')
                }else{
                    $(this).removeClass('dp-highlight')
                };
            });
        });
    });
</script>
<script>
 populateCountries("country", "state");
 populateCountries("country2");
 populateCountries("country2");
</script>
<script type="text/javascript">

//slider range
    $(function () {
        var minPrice = 800000,
            maxPrice = 3000000,
            $filter_lists = $("#filters span"),
            $filter_checkboxes = $("#filters :checkbox"),
            $items = $("#saring div.system");

        $filter_checkboxes.click(filterSystem);

        $('#slider-container').slider({
            range: true,
            min: minPrice,
            max: maxPrice,
            values: [minPrice, maxPrice],
            slide: function (event, ui) {
                $("#amount").val("Rp" + ui.values[0] + " - Rp" + ui.values[1]);
                minPrice = ui.values[0];
                maxPrice = ui.values[1];
                filterSystem();
            }
        });
        $("#amount").val("Rp" + minPrice + " - Rp" + maxPrice);

        function filterSlider(elem) {
            var price = parseInt($(elem).data("price"), 10);
            console.log(price);
            return price >= minPrice && price <= maxPrice;
        }

        function filterCheckboxes(elem) {
            var $elem = $(elem),
                passAllFilters = true;
            $filter_lists.each(function () {
                var classes = $(this).find(':checkbox:checked').map(function () {
                    return $(this).val();
                }).get();
                console.log('classes', classes);
                var passThisFilter = false;
                $.each(classes, function (index, item) {
                    if ($elem.hasClass(item)) {
                        console.log('hasClass', item);
                        passThisFilter = true;
                        return false; //stop inner loop
                    }
                });
                if (!passThisFilter) {
                    passAllFilters = false;
                    return false; //stop outer loop
                }
            });
            return passAllFilters;
        }

        function filterSystem() {
            $items.hide().filter(function () {
                return filterSlider(this) && filterCheckboxes(this);
            }).show();
        }
    });
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
<script type="text/javascript">
  $("#password").password('toggle');
</script>
</body>
</html>
