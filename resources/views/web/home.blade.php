@include('web.navbar')

<div class="col-lg-8 col-md-8 col-sm-8">
<div class="panel panel-success">
    <div class="panel-heading">
       اخبار المكتب
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body news-height" >

@foreach($home->take(4) as $n) 

<div class="cat_h1">
<div class="thumbnail post_n">
  
<b><h4 style="color:#bd720c;">{!! str_limit($n->title , 50 ) !!}<img  src="https://pbs.twimg.com/media/DQiDpZuXUAA_si2.jpg"  style="width:115px; "  align="right"> </h4></b>
<p style="color:gray; font-size:10px;"><i class="fa fa-calendar" aria-hidden="true" style="padding-right: 5px"></i>{{$n->created_at}}</p>
<div id="myhide">
<p align="center">{!! str_limit($n->content , 250 ) !!}<a href="news/{{$n->id}}" style="color:blue">أقراء المزيد...</a>

</p>
</div>
</div>
</div>
 @endforeach
<a href="news" type="button" class="btn btn-info btn-block"> عرض المزيد <i class="fa fa-caret-down " aria-hidden="true"></i></a>
    </div>
    <!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>






<div class="col-lg-4 col-md-4 col-sm-4">
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



<div class="col-lg-4 col-md-4 col-sm-4">
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
    <h6 style="text-align: center; "><b>الشارع العام - جامع مطلق الغويري</b> </h6><h6 style="text-align: center; ">الدور العلوي</h6><h5>ا<b><u>وقات العمل:</u></b></h5><ul><li>8 صباحاً الى 12 ظهراً</li><li>4 مساءً الى 8 مساءً</li></ul>
          
            
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6">
<div class="panel panel-default">
    <div class="panel-heading">
     <b>الحسابات البنكية</b>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body bank-height" >
        <div class="table-responsive">
        <div style="text-align: center;"><b><br>نسعد بتلقي تبرعاتكم المالية عبر الحسابات التالية</b></div><div style="text-align: center;"><b><br></b></div><div style="text-align: center;"><b><br></b></div><div style="text-align: center;"><b>&nbsp;- البنك الراجحي -</b></div><div style="text-align: center;"><b><br></b></div><div style="text-align: center;"><img src="https://www.saudi-banks.info/image/image_gallery?uuid=3c1cb702-30a2-4dec-984c-ebaddc96d549&amp;groupId=18&amp;t=1324122579749" style="width: 105.866px; height: 52.1189px; float: none;">&nbsp; رقم الحساب: 1326080010234004</div><div style="text-align: center;"><br></div><div style="text-align: center;"><br></div><div style="text-align: center;"><b>- البنك الاهلي -&nbsp;</b></div><div style="text-align: center;"><b><br></b><img src="https://www.saudi-banks.info/image/image_gallery?uuid=7b706786-195a-4cde-83cb-ae2ffa01d847&amp;groupId=18&amp;t=1440502406353" style="width: 109.043px; height: 53.6825px; float: none;">&nbsp; &nbsp; &nbsp;رقم الحساب: 39261275000110</div><div style="text-align: center;"><br></div><h6 style="text-align: center;"></h6><br><br>

        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6">
<div class="panel panel-default">
    <div class="panel-heading">
      المحاضرات القادمة
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body rosa-height">
        
<div class="thumbnail">
        <img style="max-width:100%;" src="https://pbs.twimg.com/media/DQiDpZuXUAA_si2.jpg" />
    </div>
    </div>
    <!-- /.panel-body -->
</div>
</div>


<style>
.news-height {
  height: 710px; 
  
}

.location-height {
  height: 185px; 
  
}

.rosa-height {
  max-height: 400px; 
  
}


@media screen and (min-width: 0px) and (max-width: 768px) {
 
    .news-height {
  height: auto; 
  
}

.location-height {
  height: auto; 
  
}

.rosa-height {
  max-height: auto; 
  
}


    #myhide { 
        display: none; 
    }  
  
  .thumbnail{

    height: 100px;
  }

}
</style>
@include('web.footer')
