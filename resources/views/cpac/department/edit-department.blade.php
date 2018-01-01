@include('cpac/style/header')
@include('cpac/style/slider')

<div id="page-wrapper">
            <div class="row">
            
            
@if($errors->has('department_name'))

@include('cpac.style.error' , ['Error' => "اسم القسم يجب الا يكون خالي."])		
	
@endif


                <div class="col-lg-12">
                    <h1 class="page-header">الاقسام</h1>

                    
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         تعديل قسم
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
{!! Form::open(['url' => 'edit-department' , 'method' => 'POST']) !!}

<input type="hidden" type="text" name="id" value="{{$Dep->id}}">  

                        <div class="form-group row">
    <label class="col-sm-2 col-form-label">اسم القسم</label>
    <div class="col-sm-10">
      <input type="text"  name="department_name" value="{{$Dep->department_name}}" >
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">الوصف</label>
    <div class="col-sm-10">
    <textarea rows="4" cols="50" name="description" value="{{$Dep->description}}" > 
		</textarea>
    </div>
  </div>

  <center>

<button  class="btn btn-success" type="submit" > حفظ <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
<button  class="btn btn-muted" onclick="goBack()"> الغاء <i class="fa fa-ban" aria-hidden="true"></i></button>
<br>
<br>
<a  class="btn btn-danger" href ="{{url('delete-department/'.$Dep->id) }}" onclick="return confirm('تأكيد الحذف؟')" > حذف القسم <i class="fa fa-trash" aria-hidden="true"></i></a>



{!! Form::close() !!}

</center>



<script>
function deleted() {
    confirm("تأكيد الحذف!");
}
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