@include('cpac/style/header')
@include('cpac/style/slider')
	
<div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                <br>
                
<a  class="btn btn-default" onclick="goBack()"> <i class="fa fa-chevron-right" aria-hidden="true"></i> رجوع</a>

                    <h1 class="page-header">الموظفين</h1>

                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
تعديل بيانات الموظف                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


{!! Form::open(['url' => 'edit-employee' , 'method' => 'POST']) !!}

                        <div class="form-group row">
    <label class="col-sm-2 col-form-label">الاسم</label>
    <div class="col-sm-10">
      <input type="text"  name="name" value="{{$User->name}}" >
    </div>
  </div>    


<input type="hidden" type="text" name="id" value="{{$User->id}}">  


  <div class="form-group row">
    <label class="col-sm-2 col-form-label">رقم الجوال</label>
    <div class="col-sm-10">
      <input type="text"  name="phone" value="{{$User->phone}}" >
    </div>
  </div>  

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">البريد الالكتروني</label>
    <div class="col-sm-10">
      <input type="email"  name="email" value="{{$User->email}}">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label" >كلمة المرور </label>
    <div class="col-sm-10">
  <input type="password" name="password"  id="password" required >
  
  <button type="button" id="TogglePassword" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-eye-close"></i> 
   
</button>
    </div>
    
  </div> 

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">تاكيد كلمة المرور </label>
    <div class="col-sm-10">
    <input type="password"  id="confirm_password" required>
  
    </div>
  </div>  
  
  <div class="form-group row">
  <label class="col-sm-2 col-form-label"> القسم</label>
  <div class="col-sm-10">
<select name="department_id"  >
@foreach($Dep as $dep)
<option value=" {{$dep->id}} " >{{$dep->department_name}}</option>
@endforeach
</select>

</div>

    </div>

<center>

<button  class="btn btn-info" type="submit" > حفظ <i class="fa fa-user-plus" aria-hidden="true"></i></button>
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