@include('web.navbar')
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<html>
<head>
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>الاخبار</title>

        <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ url('css/bootstrap-rtl.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/style.css') }}" rel="stylesheet">
        <link href="{{ url('css/home.css') }}" rel="stylesheet">
        <link href="{{ url('https://fonts.googleapis.com/css?family=Cairo') }}" rel="stylesheet">
</head>
<body>



<ol class="breadcrumb" class="pull-right">
  <li><a href="Home">الرئسية</a></li>
  <li class="active">{!!$news['title']!!}</li>
</ol>

    <div class="cat_h1">
<div class="thumbnail post_n">

<b><h4 style="color:#bd720c;">{!! $news['title'] !!}  </h4></b>
<img  src="https://pbs.twimg.com/media/DQiDpZuXUAA_si2.jpg"   style="max-height:420px; align:right;" >
 <p style="color:gray; font-size:13px;">&nbsp&nbsp<i class="fa fa-calendar" aria-hidden="true" style="padding-right: 5px"></i>{{$news['created_at']}}</p>
<div id="myhide" style="font-size:16px;">
    <p align="center" >{!! $news['content'] !!}</p>
</div>
</div>
</div>




    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  </body>
</html>
@include('web.footer')
