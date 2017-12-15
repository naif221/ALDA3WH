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
                        اضافة مؤلف جديد  </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


{!! Form::open(['url' => 'new-author' , 'method' => 'POST']) !!}





                        <div class="form-group row">
    <label class="col-sm-2 col-form-label">اسم المؤلف</label>
    <div class="col-sm-10">
      <input type="text"  name="name" >
    </div>
  </div>    

<center>

<button  class="btn btn-info" type="submit" > اضافة <i class="fa fa-plus" aria-hidden="true"></i></button>
  <button  class="btn btn-muted" onclick="goBack()"> الغاء <i class="fa fa-ban" aria-hidden="true"></i></button>
<!--   </form> -->
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