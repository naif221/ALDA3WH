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

    <title>News</title>

        <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ url('css/bootstrap-rtl.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/style.css') }}" rel="stylesheet">
        <link href="{{ url('css/home.css') }}" rel="stylesheet">
        <link href="{{ url('https://fonts.googleapis.com/css?family=Cairo') }}" rel="stylesheet">
</head>
<body>

   @foreach($news as $indexKey => $n)

<div class="container">
<ol class="breadcrumb" class="pull-right">
  <li><a href="{{url('/')}}">الرئسية</a></li>
  <li class="active">{{$n->title}}</li>
</ol>
</div>

    <div class="cat_h1">
<div class="thumbnail post_n">

<b><h4 style="color:#bd720c;">{{ $n->title }}<img  src="https://pbs.twimg.com/media/DQiDpZuXUAA_si2.jpg"  style="width:115px; "  align="right"> </h4></b>
 <p style="color:gray; font-size:10px;">&nbsp&nbsp<i class="fa fa-calendar" aria-hidden="true" style="padding-right: 5px"></i>&nbsp 2017</p>
<div id="myhide">
    <p align="center">{{ $n->content }}</p>
</div>
</div>
</div>

      @endforeach



    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  </body>
</html>
@include('web.footer')
