@include('cpac/style/header')
@include('cpac/style/slider')

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

                    <h1 class="page-header">الطلبات</h1>

                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          طلب جديد
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">



         


<form method="POST" action="store">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form-group row">
  <label class="col-sm-2 col-form-label">نوع الطلب</label>
  <div class="col-sm-10">
      
<select name="request"  >
  <option value="1">طلب عادي</option>
  <option value="2">طلب مالي</option>
  
</select>

</div>

    </div>
    
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">العنوان</label>
    <div class="col-sm-10">
      <input type="text"  name="title" >
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">المحتوى</label>
    <div class="col-sm-10">
    
    <div id="summernote" name="content"></div>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>


    </div>
  </div>



  <div class="form-group row">
    <label class="col-sm-2 col-form-label">المبلغ المقدر</label>
    <div class="col-sm-10">
      <input type="text" name="price" >
    </div>
  </div>





<center>
  <button name="go" type="submit" class="btn btn-success"> <i class="fa fa-paper-plane" aria-hidden="true"></i> ارسال</button>
  <button  class="btn btn-muted" onclick="goBack()"><i class="fa fa-ban" aria-hidden="true"></i> الغاء</button>
  </form>


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