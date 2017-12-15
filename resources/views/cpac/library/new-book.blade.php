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
اضافة كتاب جديد                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


                        {!! Form::open(['url' => 'new-book' , 'method' => 'POST']) !!}

                        <div class="form-group row">
    <label class="col-sm-2 col-form-label">الاسم</label>
    <div class="col-sm-10">
      <input type="text"  name="name" >
    </div>
  </div>    


  <div class="form-group row">
    <label class="col-sm-2 col-form-label">الرقم التسلسلي</label>
    <div class="col-sm-10">
      <input type="text"  name="barcode" >
    </div>
  </div>  

  <div class="form-group row">
  <label class="col-sm-2 col-form-label"> المؤلف</label>
  <div class="col-sm-2">
<select name="author_id">

@foreach($Auhtors as $Author)
<option value="{{$Author->id}}">{{$Author->name}}</option>

@endforeach
</select>
</div>

<label class="col-sm-2 col-form-label"> مؤلف جديد؟</label>
  <input placeholder="اسم المؤلف" type="text"  name="author" >
</div>
    </div>

  

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">العدد المتوفر</label>
    <div class="col-sm-10">
      <input type="text"  name="in_stock" >
    </div>
  </div>
  
    
  <div class="form-group row">
  <label class="col-sm-2 col-form-label"> اللغة</label>
  <div class="col-sm-10">
<select name="language_id">
@foreach($Lang as $lang)
<option value="{{$lang->id}}">{{$lang->language}}</option>
@endforeach
</select>
</div>
    </div>
<center>

<button  class="btn btn-info" type="submit" > اضافة <i class="fa fa-plus" aria-hidden="true"></i></button>
<button  class="btn btn-muted" onclick="goBack()"> الغاء <i class="fa fa-ban" aria-hidden="true"></i></button>
<!--   </form> -->
{!! Form::close() !!}

</center>

<script>
var password = document.getElementById("password")
, confirm_password = document.getElementById("confirm_password");

function validatePassword(){
if(password.value != confirm_password.value) {
  confirm_password.setCustomValidity("كلمات المرور غير متطابقة!");
} else {
  confirm_password.setCustomValidity('');
}
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

function show() {
    var a = document.getElementById('password');
    var b = document.getElementById('confirm_password');
    a.setAttribute('type', 'text');
    b.setAttribute('type', 'text');
}

function hide() {
    
    var a = document.getElementById('password');
    var b = document.getElementById('confirm_password');
    a.setAttribute('type', 'password');
    b.setAttribute('type', 'password');
}

var pwShown = 0;

document.getElementById("TogglePassword").addEventListener("click", function () {
    
    $(this).find('i').toggleClass('glyphicon glyphicon-eye-close').toggleClass('glyphicon glyphicon-eye-open');
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false);


</script>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                



                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>









@include('cpac/style/footer')