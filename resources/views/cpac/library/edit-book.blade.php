@include('cpac/style/header')
@include('cpac/style/slider')

	

<div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                <br>
                
<a  class="btn btn-default" onclick="goBack()"> <i class="fa fa-chevron-right" aria-hidden="true"></i> رجوع</a>

                    <h1 class="page-header">المكتبة</h1>

                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
تعديل بيانات كتاب                         </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


                        {!! Form::open(['url' => '' , 'method' => 'POST']) !!}

                       

                       
                        <div class="form-group row">
    <label class="col-sm-2 col-form-label">الاسم</label>
    <div class="col-sm-10">
      <input type="text"  name="name"  value="" >
    </div>
  </div>    


  <div class="form-group row">
    <label class="col-sm-2 col-form-label">الرقم التسلسلي</label>
    <div class="col-sm-10">
      <input type="text"  name="barcode"  value="" >
    </div>
  </div>  

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">المؤلف</label>
    <div class="col-sm-10">
      <input type="text"  name="author"  value="" >
    </div>
  </div>

  

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">العدد المتوفر</label>
    <div class="col-sm-10">
      <input type="text"  name="in_stock" value="">
    </div>
  </div>
  
    
  <div class="form-group row">
  <label class="col-sm-2 col-form-label"> اللغة</label>
  <div class="col-sm-10">
<select name="language_id"  >
  <option value="1"></option>
  <option value="2"></option>
  
</select>

</div>

    </div>
<center>

<button  class="btn btn-success" type="submit" > حفظ <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
<button  class="btn btn-muted" onclick="goBack()"> الغاء <i class="fa fa-ban" aria-hidden="true"></i></button>


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