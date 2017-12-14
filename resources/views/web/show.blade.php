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

<article class="col-md-9 col-lg-9 art_s " >
<ol class="breadcrumb" class="pull-right">
  <li><a href="{{url('/')}}">الرئسية</a></li>
  <li class="active">{{$n->title}}</li>
</ol>
</article>
<article class="col-md-9 col-lg-9 art_n " >
	<br />
 <div class="col-lg-12">
 <div class="row">
 <div class="cate_post">
 
            <div class="col-md-3">
           <img src="http://english.republika.mk/wp-content/uploads/2014/08/fountain-pen-writing.jpg" width="100%" />
                </div>

               <div class="col-md-9">
                  <h2 class="cat_h2">{{ $n->title }}</h2>
                <p>
                    {{ $n->content }}
               </p>
            </div>

</div> 


      @endforeach
 </div>
 </div>

</article>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  </body>
</html>
@include('web.footer')