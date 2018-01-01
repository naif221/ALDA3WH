@include('cpac/style/header')
@include('cpac/style/slider')

	

<div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                <br>
                
<a  class="btn btn-default" onclick="goBack()"> <i class="fa fa-chevron-right" aria-hidden="true"></i> رجوع</a>


@if($errors->has('language'))

@include('cpac.style.error' , ['Error' => "يجب ان لا يكون حقل اللغة فارغ."])		
	
@endif
                    <h1 class="page-header">المكتبة</h1>

                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
اضافة لغة جديدة</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


{!! Form::open(['url' => 'new-languge' , 'method' => 'POST']) !!}

                        <div class="form-group row">
    <label class="col-sm-2 col-form-label">اللغة</label>
    <div class="col-sm-10">
      <input type="text"  name="language" >
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