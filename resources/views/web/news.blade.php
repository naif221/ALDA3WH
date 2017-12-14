<<<<<<< HEAD
@include('web.navbar')




<div class="container">

    
<div class="thumbnail">
  <a href="" >
<b><h4 style="color:blue;">     &nbsp&nbsp هنا نضع العنوان   &nbsp<img  src="https://pbs.twimg.com/media/DQiDpZuXUAA_si2.jpg"  style="width:115px; "  align="right"> </h4></b>
</a> <p style="color:gray; font-size:10px;">&nbsp&nbsp<i class="fa fa-calendar" aria-hidden="true"></i>&nbsp 2017</p>
<div id="myhide">
    <p align="center">
نوّه وزير النقل الدكتور نبيل بن محمد العامودي، بمضامين خطاب خادم الحرمين الشريفين الملك سلمان بن عبدالعزيز آل سعودة الجادة للمضي قدمًا على طريق التنمية و<a href="">أقراء المزيد...</a></div>
</p>
</div>

<div class="thumbnail">
<a href="" >
<b><h4 style="color:blue;">     &nbsp&nbsp هنا نضع العنوان   &nbsp<img  src="https://pbs.twimg.com/media/DQiDpZuXUAA_si2.jpg"  style="width:115px; "  align="right"> </h4></b>
</a> <p style="color:gray; font-size:10px;">&nbsp&nbsp<i class="fa fa-calendar" aria-hidden="true"></i>&nbsp 2017</p>
<div id="myhide">
  <p align="center">
نوّه وزير النقل الدكتور نبيل بن محمد العامودي، بمضامين خطاب خادم الحرمين الشريفين الملك سلمان بن عبدالعزيز آل سعودة الجادة للمضي قدمًا على طريق التنمية و<a href="">أقراء المزيد...</a></div>
</p>
</div>
<div class="thumbnail">
<a href="" >
<b><h4 style="color:blue;">     &nbsp&nbsp هنا نضع العنوان   &nbsp<img  src="https://pbs.twimg.com/media/DQiDpZuXUAA_si2.jpg"  style="width:115px; "  align="right"> </h4></b>
</a> <p style="color:gray; font-size:10px;">&nbsp&nbsp<i class="fa fa-calendar" aria-hidden="true"></i>&nbsp 2017</p>
<div id="myhide">
  <p align="center">
نوّه وزير النقل الدكتور نبيل بن محمد العامودي، بمضامين خطاب خادم الحرمين الشريفين الملك سلمان بن عبدالعزيز آل سعودة الجادة للمضي قدمًا على طريق التنمية و<a href="">أقراء المزيد...</a></div>
</p>
</div>

<div class="thumbnail">
<a href="" >
<b><h4 style="color:blue;">     &nbsp&nbsp هنا نضع العنوان   &nbsp<img  src="https://pbs.twimg.com/media/DQiDpZuXUAA_si2.jpg"  style="width:115px; "  align="right"> </h4></b>
</a> <p style="color:gray; font-size:10px;">&nbsp&nbsp<i class="fa fa-calendar" aria-hidden="true"></i>&nbsp 2017</p>
<div id="myhide">
  <p align="center">
نوّه وزير النقل الدكتور نبيل بن محمد العامودي، بمضامين خطاب خادم الحرمين الشريفين الملك سلمان بن عبدالعزيز آل سعودة الجادة للمضي قدمًا على طريق التنمية و<a href="">أقراء المزيد...</a></div>
</p>
</div>



</div>



<style>



@media screen and (min-width: 0px) and (max-width: 768px) {
    #myhide { display: none; }  /* show it on small screens */
  }
  .thumbnail{

    height: 100px;
  }
</style>



=======
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



<article class="col-md-9 col-lg-9 art_s " >
<ol class="breadcrumb" class="pull-right">
  <li><a href="index.php">الرئسية</a></li>
  <li class="active">عنوان القسم</li>
</ol>
</article>
<article class="col-md-9 col-lg-9 art_n " >
    <br />
 <div class="col-lg-12">
 <div class="row">
 <div class="cate_post">
    @foreach($news as $indexKey => $n)
            <div class="col-md-3">
           <img src="http://english.republika.mk/wp-content/uploads/2014/08/fountain-pen-writing.jpg" width="100%" />
                </div>
               <div class="col-md-9">
                  <h2 class="cat_h2">{{ $n->title }}</h2>
                <p>
                    {{ $n->content }}
               </p>
            </div>  
            <div class="col-md-12">
            
            <hr style="margin-bottom : 9px;"/>
            <a href="news/{{ $n->id }}" class="btn btn-warning pull-left">إقراء المزيد</a> 
            <p class="pull-right"> <i class="fa fa-pencil" aria-hidden="true"></i><a href="{{Auth::user('id')}}"> سامي</a> | <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date("d-m-Y ");?></p>
            </div>
           <n/>

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
>>>>>>> 4967aeb65a27d89421034ab0f5f995d26f7b7a0d
@include('web.footer')