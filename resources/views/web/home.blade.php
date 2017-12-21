@include('web.navbar')

      <div class="front3">
    <div class="front31">
      
    </div> 
    <div class="front32">
      <marquee width="100%" height="34px" id="last_feed" class="" behavior="scroll" direction="right" scrolldelay="70" scrollamount="3" align="top" onmouseover="this.setAttribute('scrollamount', 1, 0);" onmouseout="this.setAttribute('scrollamount', 3, 0);">
        @foreach($home->take(6) as $n)  
    <a href="news?id={{$n->id}}" class="s2">{{ $n->title }}</a>
 @endforeach
  </marquee>







</div> 
    <a class="front33"></a> 
</div>
<div class="col-lg-8 col-md-8 col-sm-8">
<div class="panel panel-success">
    <div class="panel-heading">
       اخبار المكتب
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body news-height" >

@foreach($home->take(4) as $n) 

    <div class="cat_h">
<div class="thumbnail post_n">
  
<b><h4 style="color:#bd720c;">{!! str_limit($n->title , 50 ) !!}<img height="42" width="42" src="{{$n->file_path}}"  style="width:115px; "  align="right"> </h4></b>
<b><h4 style="color:#bd720c;">{!! $n->title !!}<img  src="{{$n->file_path}}"  style="width:115px; "  align="right"> </h4></b>

<p style="color:gray; font-size:10px;"><i class="fa fa-calendar" aria-hidden="true" style="padding-right: 5px"></i>{{$n->created_at}}</p>
<div id="myhide">
    <p align="center" >{!! str_limit($n->content , 250 ) !!}<a href="news?id={{$n->id}}" style="color:blue">أقراء المزيد...</a>

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

@extends('web.sidebar')
<style>
.news-height {
  max-height: 1800px; 
  
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

    height: 1800px;
  }

}
</style>
@include('web.footer')