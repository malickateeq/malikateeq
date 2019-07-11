<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('images/'.$settings->favicon) }}">
        <title> {{ $settings->title }} </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap 4 -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Styles -->

        <style>
            html, body {
                /* background: url("images/bg-image.jpg")no-repeat center center; */
                background: url("images/{{$settings->bg_image}}")no-repeat center center;
                background-size: cover;
                background-color: #263b31;
                font-family: "Arial", sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                color: white;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .title {
                text-transform: uppercase;
                font-size: 60px;
                font-family: "Times New Roman", "Times";
            }
            .sub-title{
                letter-spacing: 2.5px;
                text-transform: uppercase;
                font-size: 22px;
                font-family: "arial";
            }
            .description{
                font-family: "arial";
            }
            .box{
                margin: 0px 0px 0px 0px;
                padding: 0px 5px 0px 70px;
            }
            .ext-links{
                padding: 10px 0px;
                font-size: 13px;
                letter-spacing: 2.5px;
                text-transform: uppercase;
                font-weight: bold;
                border: 2px solid white;
            }
            @media screen and (max-width: 1200px) {
                div.box {
                    /* color: blue; */
                }
                .title {
                    font-size: 50px;
                }
            }
            @media screen and (max-width: 1200px) {
                div.box {
                    /* color: violet; */
                }
                .title {
                    font-size: 45px;
                }
            }
            @media screen and (max-width: 1000px) {
                div.box {
                    /* color: purple; */
                }
                .title {
                    font-size: 40px;
                }
            }
            @media screen and (max-width: 900px) {
                div.box {
                    /* color: grey; */
                }
                .title {
                    font-size: 30px;
                }
                .sub-title{
                    font-size: 18px;
                }
                .description{
                    font-size: 15px;
                }
            }
            @media screen and (max-width: 700px) {
                div.box {
                    /* color: blue; */
                }
                .title {
                    font-size: 35px;
                }
                .sub-title{
                    font-size: 18px;
                }
                .description{
                    font-size: 15px;
                }
            }
            @media screen and (max-width: 600px) {
                div.box {
                    /* color: white; */
                    margin: 0px 30px 0px 30px;
                    padding: 0px 5px 0px 10px;
                }
                div.btns {
                    /* color: white; */
                    margin: 0px 100px 0px 0px;
                    padding: 0px 5px 0px 10px;
                }
                .title {
                    font-size: 35px;
                }
                .sub-title{
                    font-size: 18px;
                }
                .description{
                    font-size: 15px;
                }
            }
            @media screen and (max-width: 400px) {
                div.box {
                    /* color: red; */
                }
                .title {
                    font-size: 30px;
                }
                .sub-title{
                    font-size: 12px;
                }
                .description{
                    font-size: 9px;
                }
            }
            @media screen and (max-width: 280px) {
                div.box {
                    /* color: red; */
                }
                .title {
                    font-size: 20px;
                }
                .sub-title{
                    font-size: 10px;
                }
                .description{
                    font-size: 10px;
                }
                .social-icons img{
                    width: 10px;
                    height: 10px;
                    margin: 13px 8px;
                }
            }
            .social-icons img{
                width: 20px; 
                height: 20px;
                margin: 13px 8px;
            }
            .social-icons img:hover{
                filter: brightness(60%);
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height container-fluid">

            <!-- nav bar -->
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Settings</a>
                    @else
                        <!-- <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif -->
                    @endauth
                </div>
            @endif
            <!-- end nav bar -->

            <div class="row container-fluid">

                <div class="col-md-6 col-sm-0 col-xs-0">
                </div>
                
                <div class="col-md-6 col-sm-12 col-xs-12 box">

                    <div class="row">
                        <div class="col-md-12 title">
                            {{ $settings->name }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 sub-title mb-3">
                            {{ $settings->one_liner }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-8 description mb-3">
                        {{ $settings->description }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-8 col-sm-5 col-xs-2 btns my-2">
                            <a href="{{$settings->btn1_link}}" class="btn btn-outline-light btn-block ext-links" target="_blank">
                                {{$settings->btn1_text}}
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-8 col-sm-5 col-xs-2 btns my-2">
                            <a href="{{$settings->btn2_link}}" class="btn btn-outline-light btn-block ext-links" target="_blank">
                                {{$settings->btn2_text}}
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-8 col-sm-5 col-xs-2 btns my-2">
                            <a href="{{$settings->btn3_link}}" class="btn btn-outline-light btn-block ext-links" target="_blank">
                                {{$settings->btn3_text}}
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 social-icons">
                            <a href="{{ $settings->youtube_link }}" target="_blank">
                                <img src="{{asset('/images/youtube.png')}}" alt="">
                            </a>
                            <a href="{{ $settings->insta_link }}" target="_blank">
                                <img src="{{asset('/images/instagram.png')}}" alt="">
                            </a>
                            <a href="{{ $settings->fb_link }}" target="_blank">
                                <img src="{{asset('/images/facebook.png')}}" alt="">
                            </a>
                            <a href="{{ $settings->twitter_link }}" target="_blank">
                                <img src="{{asset('/images/twitter.png')}}" alt="">
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>
