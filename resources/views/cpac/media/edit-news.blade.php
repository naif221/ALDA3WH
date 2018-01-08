@include('cpac/style/header')
@include('cpac/style/slider')

	<meta name="csrf-token" content="{{ csrf_token() }}">


<head><link href="{{ url('css/bootstrap-r.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote-bs4.js"></script>
  </head>


<div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                <br>
                
<a  class="btn btn-default" onclick="goBack()"> <i class="fa fa-chevron-right" aria-hidden="true"></i> رجوع</a>

                    <h1 class="page-header">الاعلام</h1>

                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          تعديل الخبر
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">



         


<!-- <form method="post" action="{{ route('store') }}"> -->
{!! Form::open(['url' => 'edit-news' , 'method' => 'POST']) !!}
    
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">العنوان</label>
    <div class="col-sm-10">
      <input type="text"  name="title" value="{{$posts['title']}}" >
    </div>
  </div>


  <div class="form-group row">
<label class="col-sm-2 col-form-label">الصورة الرئيسية للخبر</label>
    <div class="col-sm-10">
    <input type="file" name="file_path" >
    </div>
</div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">المحتوى</label>
    <div class="col-sm-10">
    
    

<textarea class="summernote" name="content" value="" >{{$posts['content']}}</textarea> 
    <script>
$(document).ready(function() {
  $('.summernote').summernote();
});
    </script>
		 

    </div>
  </div>

<center>

  <input type="hidden" type="text" name="id" value="{{$posts['id']}}">  
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