<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8" />
  <title>Viralnova中文网 | 致力于分享有趣的、正能量的、有价值的资讯消息。</title>
  <meta name="description" content="Viralnova中文网|致力于分享有趣的、正能量的、有价值的资讯消息。">
  <meta name="keywords" content="viralnova,viralnova中文网,有趣的，正能量的，有价值的">
  <link rel="Shortcut Icon" href="{{ URL::asset('resources/views/index/woshipm/assets/images/favicon.ico') }}"
        type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <!--[if lte IE 8]><script src="http://apps.bdimg.com/libs/html5shiv/3.6/html5shiv.min.js"></script><![endif]-->
  <!--[if lte IE 8]><script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  <link rel="stylesheet" href="{{ URL::asset('resources/views/index/woshipm/assets/css/app.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('resources/views/index/woshipm/assets/css/misc.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('resources/views/index/woshipm/assets/css/viralnova.css') }}" />
  <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css" />
  <!--[if lte IE 9]><link rel="stylesheet" href="{{ URL::asset('resources/views/index/woshipm/assets/css/ie9.css') }}" /><![endif]-->
  <!--[if lte IE 8]><link rel="stylesheet" href="{{ URL::asset('resources/views/index/woshipm/assets/css/ie8.css') }}" /><![endif]-->
  <script src="http://apps.bdimg.com/libs/angular.js/1.4.6/angular.min.js"></script>
</head>
<body class="home blog " ng-app="myApp">
<style>
  body {
    /*background: #eee;*/
    /*font-family: Helvetica Neue, Helvetica, Arial, sans-serif;*/
    /*font-size: 14px;*/
    /**/
    /*margin: 0;*/
    /*padding: 0;*/
  }
  .swiper-container {
    width: 670px;
    height: 320px;
     margin-left: 0;
    margin-right: 0;
    float: left;
  }
  .swiper-pagination {

    text-align: right;

  }
  .swiper-button-next, .swiper-container-rtl .swiper-button-prev {
    background: url('resources/views/index/woshipm/assets/images/handel.png') no-repeat;
    right: 0;
    width: 35px;
    height: 81px;
    display: none;
  }
  .swiper-container:hover .swiper-button-next{
    display: block;
  }
  .swiper-button-prev, .swiper-container-rtl .swiper-button-next {
    background: url('resources/views/index/woshipm/assets/images/handel.png') no-repeat;
    left: 0;
    width: 35px;
    height: 81px;
    background-position: -72px 0;
    display: none;
  }
  .swiper-container:hover .swiper-button-prev{
    display: block;
  }
  .swiper-pagination-bullet-active {

    background: #e64127;
  }
  .swiper-pagination-bullet {
    width: 10px;
    height: 10px;

  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
  }
  .swiper-slide a{
    display: block;
    position: relative;
  }
  .swiper-slide a img{
    display: block;

  }
  .swiper-slide a h3{
    width: 100%;
    height: 48px;
    display: block;
    position: absolute;
    bottom: 0;
    left:0;
    color: #fff;
    text-align: left;
    padding-left: 20px;
    background-color: rgba(0,0,0,.3);
    z-index: 110;
    line-height: 48px;
  }
  .swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {


    width: 100px;
  }
  .swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {

    right: 0;
    left: auto;
  }
</style>
<div id="wrapper">
  <div class="site-main surface-container">