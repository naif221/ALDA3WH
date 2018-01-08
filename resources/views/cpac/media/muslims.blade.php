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
		{!! Form::open(['url' => '' , 'method' => 'POST']) !!}


    
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">العنوان</label>
    <div class="col-sm-10">
      <p > المسلمين الجدد منذ بداية هذا العام</p>
    </div>
  </div> 


  <div class="form-group row">
    <label class="col-sm-2 col-form-label">العدد الحالي</label>
    <div class="col-sm-10">
    <input type="text"  name="numberM" >
    </div>
  </div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">اضافة/حذف</label>
    <div class="col-sm-2">
    <div class="input-group add-minus">
          <span class="input-group-btn">
          
              <a type="button"  href="" class="form-control btn btn-danger btn-number" onclick="return confirm('تاكيد الحذف')" >
                <span class="glyphicon glyphicon-minus"><b> 1</b></span>
              </a>
          </span>
          <span class="input-group-btn">
              <a type="button"   href=""  class="form-control btn btn-success btn-number"  onclick="return confirm('تاكيد الاضافة')" >
                  <span class="glyphicon glyphicon-plus"><b> 1</b></span>
              </a>
          </span>
         
      </div>
    </div>
  </div> 



<center>

<style>
.add-minus{
    width: 185px;
    margin: 0px auto;
    
  }
</style>
  
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