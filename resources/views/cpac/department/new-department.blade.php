@include('cpac/style/header')
@include('cpac/style/slider')
<div id="page-wrapper">
            <div class="row">
            
@if($errors->has('department_name'))

@include('cpac.style.error' , ['Error' => "اسم القسم يجب ان لا يكون خالي."])		
	
@endif


                <div class="col-lg-12">
                    <h1 class="page-header">الاقسام</h1>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         اضافة قسم
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        {!! Form::open(['url' => 'new-department' , 'method' => 'POST']) !!}

                        <div class="form-group row">
    <label class="col-sm-2 col-form-label">اسم القسم</label>
    <div class="col-sm-10">
      <input type="text"  name="department_name" >
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">الوصف</label>
    <div class="col-sm-10">
    <textarea rows="4" cols="50" name="description"></textarea>
    </div>
  </div>

  <center>

<button  class="btn btn-success" type="submit" > حفظ <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
<button  class="btn btn-muted" onclick="goBack()"> الغاء <i class="fa fa-ban" aria-hidden="true"></i></button>

{!! Form::close() !!}

</center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@include('cpac/style/footer')