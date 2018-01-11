@include('web.navbar')

<div id="myCarousel" class="carousel slide" data-ride="carousel"  >
  <!-- Indicators -->
  <ol class="carousel-indicators" style="max-height:400px;" >
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner " style="max-height:400px;  border-style: solid;
    border-width: 5px;  border-color: #cc7a0a; border-top: none;">
    
    <div class="item active" >
    <a href="images/im1.png">
      <img src="images/im1.png" >
    </div>
</a>
<div class="item" >
  
<a href="images/im1.png">
  <img src="images/im1.png" >
</div>
</a>

<div class="item" >
<a href="images/im1.png">
  <img src="images/im1.png" >
</div>
</a>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
<div class="col-lg-12 ">
      

<div class="front3">
    
      <marquee width="100%" height="34px"  behavior="scroll" direction="right" scrolldelay="100" scrollamount="5" align="top" onmouseover="this.setAttribute('scrollamount', 1, 0);" onmouseout="this.setAttribute('scrollamount', 3, 0);">
        @foreach($home->take(6) as $n)  
    <a href="news?id={{$n->id}}" class="s2">{{ $n->title }}</a><img src="images/logo-small.png" style=" margin: -5px 8px 0px 8px;">
    @endforeach
  </marquee>


</div> 
  <a class="front33"></a> 
</div>



<div class="thumbnail-img col-lg-4 col-md-4 col-sm-4" >
<div class="col_fourth" >
<p style=" margin-top:-20px; max-width:100%;"> 
<center>
<span class="fa fa-group fa-3x"></span>
<br>
<span id="count" style=" color: #000000; font-size:25px;">{{ $Count->count }}</span>
<br>
<span style="color:#000000;" > المسلمين الجدد منذ بداية هذا العام </span>
</center>
</p>
</div>
</div>

<a href="https://www.youtube.com/channel/UC9hpW8CcpL2dKptiQR8Go2Q">
<div class="thumbnail-img col-lg-4 col-md-4 col-sm-4">
<div class="col_fourth" >
<p style=" margin-top:-20px; max-width:100%;"> 
<center>
<span class="fa fa-youtube-play fa-5x fa-fw"></span>
<br>
<span style="color:#000000;">قناة المكتب على اليوتيوب</span>
</center>
</p>
</div>
</div>
</a>

<a href="islam">
<div class="thumbnail-img col-lg-4 col-md-4 col-sm-4 ">
<div class="col_fourth" >
<p style=" margin-top:-20px;  max-width:100%;"> 
<center>
<img src="images/hand.png" style="margin-bottom: 5px;">
<br>
<span style="color:#000000;"> لديك شخص تريد دعوته للأسلام؟</span>
</center>
</p>
</div>
</div>
</a>






<div class="col-lg-8 col-md-8 col-sm-12">
<div class="panel panel-default">
    <div class="panel-heading">
       اخبار المكتب
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body news-height" >

@foreach($home->take(4) as $n) 

    <div class="cat_h">
<div class="thumbnail ">
  
<b>
<a href="news?id={{$n->id}}" ><h4 style="color:#bd720c;"><img  src="https://pbs.twimg.com/media/DQiDpZuXUAA_si2.jpg"  style="width:130px; "  align="right"> {!! $n->title !!}</h4></b></a>
<p style="color:gray; font-size:10px;"><i class="fa fa-calendar" aria-hidden="true" style="padding-right: 5px"></i>{{$n->created_at}}</p>
<div id="myhide">
    <p align="center" >{!! str_limit($n->content , 150 ) !!}<a href="news?id={{$n->id}}" style="color:blue">أقراء المزيد...</a>

</p>
</div>
</div>
</div>
 @endforeach
<a href="more" type="button" class="btn btn-info btn-block"> عرض المزيد <i class="fa fa-caret-down " aria-hidden="true"></i></a>
    </div>
    <!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>




<div class="col-lg-4 col-md-4 col-sm-12">
<div class="panel panel-primary">
    <div class="panel-heading">
       Twitter <b>@afifdh</b>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body twitter-height">
        <div class="table-responsive">
              <a class="twitter-timeline" data-height="300" href="https://twitter.com/afifdh">Tweets by afifdh</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
</div>
</div>



<div class="col-lg-4 col-md-4 col-sm-12">
<div class="panel panel-default">
    <div class="panel-heading">
     الموقع و اوقات العمل
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body location-height">
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.306003235685!2d42.92963638543454!3d23.91421598450882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x158fbe96ac6d17a9%3A0xabb6326bc398a1a3!2z2KzYp9mF2Lkg2YXYt9mE2YIg2KfZhNi62YjZitix2Yo!5e0!3m2!1sar!2sus!4v1513191390589" 
     width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- /.table-responsive -->
            
    </div>
    <!-- /.panel-body -->
    <h6 style="text-align: center; "><b>الشارع العام - جامع مطلق الغويري</b> </h6><h6 style="text-align: center; ">الدور العلوي</h6><h5>ا<b><u>وقات العمل:</u></b></h5><ul><li>9 صباحاً الى 12 ظهراً</li><li>4 مساءً الى 8 مساءً</li></ul><p style="text-align: center; "><b>هاتف: 0117240608</b></p>
          
            
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12">
<div class="panel panel-default">
    <div class="panel-heading">
     <b>الحسابات البنكية</b>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body bank-height" >
        <div class="table-responsive">
        <div style="text-align: center;"><b><br>نسعد بتلقي تبرعاتكم المالية عبر الحسابات التالية</b><div style="text-align: center;"><b><br></b></div><div style="text-align: center;"><b style="background-color: rgb(255, 255, 255);"><br></b></div><div style="text-align: center;"><b style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 255);">&nbsp;- البنك الراجحي -</b></div><div style="text-align: center;"><b style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 255);"><br></b></div><div style="text-align: center;"><span style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 255);"><span style="width: 105.866px; height: 52.1189px;"><img src="https://www.saudi-banks.info/image/image_gallery?uuid=3c1cb702-30a2-4dec-984c-ebaddc96d549&amp;groupId=18&amp;t=1324122579749" style="width: 105.866px; height: 52.1189px; float: none;"></span>&nbsp; رقم الحساب: 1326080010234004</span></div><div style="text-align: center;"><br></div><div style="text-align: center;"><br></div><div style="text-align: center;"><b style="color: rgb(107, 165, 74);">- البنك الاهلي -&nbsp;</b></div><div style="text-align: center;"><span style="color: rgb(107, 165, 74);"><b style=""><br></b><span style="width: 109.043px; height: 53.6825px;"><img src="https://www.saudi-banks.info/image/image_gallery?uuid=7b706786-195a-4cde-83cb-ae2ffa01d847&amp;groupId=18&amp;t=1440502406353" style="width: 109.043px; height: 53.6825px; float: none;"></span>&nbsp; &nbsp; &nbsp;رقم الحساب: 39261275000110</span></div><div style="text-align: center;"><br></div><h6 style="text-align: center;"></h6>

      </div>

        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12">
<div class="panel panel-default" style="margin-bottom: 40px;">
    <div class="panel-heading">
      المحاضرات القادمة
    </div>
    <!-- /.panel-heading -->
    
        
<div class="thumbnail-img" >
        <img style="max-width:100%; " src="{{App\Event::find(1)->img_path}}" />
    </div>
    <!-- /.panel-body -->
</div>
</div>

<style>
.news-height {
  height: 743px; 
  
}

.location-height {
  height: 185px; 
  
}

.rosa-height {
  max-height: 380px; 
  
}
.col_fourth { 
    
font-family: Arial;
padding: 25px;
background-color: #ffffff;
border-radius: 15px;
text-align: center;	
width: 100%;
height: 130px;
margin-bottom: 10px; 
border: 1px solid #c7c6c6;
}
   
@media screen and (min-width: 0px) and (max-width: 768px) {
 
.news-height {
  height: auto; 
  
}

.location-height {
  height: auto; 
  
}



    #myhide { 
        display: none; 
    }  
  
  .thumbnail{

    height: 115px;
  }

}
</style>


@include('web.footer')