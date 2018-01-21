@include('web.navbar')

<br>
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="panel panel-default">
<div class="panel-heading">
 قم بدعوة شخص للأسلام عبر المكتب
    </div>
    
    <div class="panel-body twitter-height">
        <div class="table-responsive">


		{!! App\Islam::find(1)->content !!}



        </div>
       
    </div>
   
</div>
</div>



@include('web.footer')