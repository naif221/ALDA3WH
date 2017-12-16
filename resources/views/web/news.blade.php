@include('web.navbar')






      
<div class="container">
<ol class="breadcrumb" class="pull-right">
  <li><a href="{{url('/')}}">الرئسية</a></li>
  <li class="active">الأخبار</li>
</ol>
</div>
@foreach($news as $indexKey => $n) 

    <div class="cat_h1">
<div class="thumbnail post_n">

<b>
<h4 style="color:#bd720c;">{{ $n->title }}<img  src="https://pbs.twimg.com/media/DQiDpZuXUAA_si2.jpg"  style="width:115px; "  align="right"> </h4>
</b>
<p style="color:gray; font-size:10px;">
    <i class="fa fa-calendar" aria-hidden="true" style="padding-right: 5px"></i>{{$n->created_at}}</p>

<div id="myhide">
    <p align="center">{{ str_limit($n->content , 250) }}<a href="news/{{$n->id}}" style="color:blue">أقراء المزيد...</a>

</p>
</div>
</div>
</div>
 @endforeach




<style>
@media screen and (min-width: 0px) and (max-width: 768px) {
    #myhide { display: none; }  /* show it on small screens */
  }
  .thumbnail{
    max-height: 1800px;
  }
</style>


@include('web.footer')
