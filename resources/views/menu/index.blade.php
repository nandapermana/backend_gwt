@extends('menu.master')

@section('title')
        Index
@endsection

@section('content')

    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand logo">
                    <h2>GWT</h2>
                </a>
            </div>
            <!--Logo/-->
        </div>
    </div>
    <!--Mainmenu-area/-->

    <!--Header-area-->
    <header class="header-area  full-height relative v-center" id="home-page">
        <div class="absolute anlge-bg"></div>
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-md-7 header-text">
                    <h2><font style="color:white">It’s all about Promoting your Business</font></h2>
                    <p><font style="color:white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ex inventore vel error quibusdam animi fugiat, doloribus dolores consectetur nulla deleniti sint blanditiis quod debitis quis vitae officiis tempora numquam. </font></p>
                    <a href="{{route('go_menu')}}" class="button white"> What We Do <i class="fas fa-arrow-right"></i> </a>
                </div>
                <div class="hidden-xs hidden-sm col-md-5 text-right">
                    <div class="screen-box screen-slider">
                        <div class="item">
                            <img src="images/screen-1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/screen-2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/screen-3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/screen-4.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/screen-5.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div  style="background: linear-gradient(-90deg, #37e9ba, #5e95c6);">
        <font style="color:white;"  size= "1px";><center> &nbsp; Copyright(c)2019 Global Wahana Tirta </center> </font>
    </div>

@endsection