@include('cpac/style/header')
@include('cpac/style/slider')

	<meta name="csrf-token" content="{{ csrf_token() }}">




<div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                <br>
                
<a  class="btn btn-default" onclick="goBack()"> <i class="fa fa-chevron-right" aria-hidden="true"></i> رجوع</a>

                    <h1 class="page-header">الاعلام</h1>

                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          تعديل المحتوى
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">



         


<!-- <form method="post" action="{{ route('store') }}"> -->
{!! Form::open(['url' => 'stroe-img-event' , 'method' => 'POST' ,'files' => 'true']) !!}


    
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">العنوان</label>
    <div class="col-sm-10">
      <p >فعاليات المكتب</p>
    </div>
  </div>


    <div class="form-group row">
    <label class="col-sm-2 col-form-label">الصورة</label>
    <div class="col-sm-10">
    <input type="file" name="file_path" >
    </div>
    </div>
    
  <div class="col-sm-12">
      <p >الحجم المتناسق 380x538 </p>
    </div>
    <div class="thumbnail-img">
        <img style="max-width:100%; " src="{{$img}}" />
    </div>

    

    
</div>

<center>

  
  <button  class="btn btn-success" ><i class="fa fa-floppy-o" aria-hidden="true"></i> حفظ</button>
  <button  class="btn btn-muted" onclick="goBack()"><i class="fa fa-ban" aria-hidden="true"></i> الغاء</button>

{!! Form::close() !!}

</center>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                



                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>









@include('cpac/style/footer')