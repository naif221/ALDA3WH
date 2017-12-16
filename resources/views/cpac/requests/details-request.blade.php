@include('cpac/style/header')
@include('cpac/style/slider')


@foreach($details as $detail)

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <br>
                
<a  class="btn btn-default" onclick="goBack()"> <i class="fa fa-chevron-right" aria-hidden="true"></i> رجوع</a>

                    <h1 class="page-header">الطلبات</h1>

                    


<br>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            تفاصيل الطلب
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            


    <div class="form-group row">
    <label class="col-sm-2 col-form-label">رقم الطلب</label>
    <div class="col-sm-2">
    <p>{{$detail->id}}<p>
    </div>
    <label class="col-sm-2 col-form-label">الحالة</label>
    <div class="col-sm-2">
    <p>{{$detail->state->title}}<p>
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">مقدم الطلب</label>
    <div class="col-sm-2">
    <p>{{$detail->user->name}}<p>
    </div>
    <label class="col-sm-2 col-form-label">القسم</label>
    <div class="col-sm-2">
    <p>{{$detail->user->department->department_name}}<p>
    </div>
    <label class="col-sm-2 col-form-label">الوقت و التاريخ</label>
    <div class="col-sm-2">
    <p>{{$detail->created_at}}<p>
    </div>
    </div>


    <div class="form-group row">
    <label class="col-sm-2 col-form-label">نوع الطلب</label>
    <div class="col-sm-2">
    @if(is_null($detail->price))
    
    <p>طلب عادي<p>
    
    @else
    <p>طلب مالي<p>
    </div>

    <label class="col-sm-2 col-form-label">القيمة</label>
    <div class="col-sm-2">
    <p>{{$detail->price}}<p>
    @endif
    </div>
    </div>

<hr>
<br>
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">العنوان</label>
    <div class="col-sm-2">
    <p>{{$detail->title}}<p>
    </div>
    </div>



    <div class="form-group row">
    <label class="col-sm-2 col-form-label">المحتوى</label>
    <div class="col-sm-10">
    <p>
		{!! $detail->content !!}
	<p>
    </div>
    </div>


@if($detail->state_id == App\Pointer::$UnderStudy | $detail->state_id == App\Pointer::$UnderStudyFromCouncil )
@if(Auth::user()->department_id == App\Pointer::$Manager | Auth::user()->department_id == App\Pointer::$Council)
<form  method="POST" action="{{ url('request-accept') }}">
<center>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" type="text" name="id" value="{{$detail->id}}">  
<button  class="btn btn-success" > قبول <i class="fa fa-check-square-o" aria-hidden="true"></i></button>
</form> 

<form  method="POST" action="{{ url('request-reject') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" type="text" name="id" value="{{$detail->id}}">  
<button  class="btn btn-danger" > رفض <i class="fa fa-times-circle" aria-hidden="true"></i></button>
</form> 
@endif
@if(Auth::user()->department_id == App\Pointer::$Manager)
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">تحويل
<i class="fa fa-undo" aria-hidden="true"></i>
</button>
</center>




<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">تحويل الطلب</h4>
      </div>
      <div class="modal-body">
      <div class="form-group row">
    <label class="col-sm-2 col-form-label">رقم الطلب</label>
    <div class="col-sm-10">
    <p>{{$detail->id}}<p>
    </div>
    </div>
    
     <form  method="POST" id="trnsform" action="{{ url('transact') }}">
	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" type="text" name="id" value="{{$detail->id}}">  
    

      <div class="form-group row">
  <label class="col-sm-2 col-form-label">تحويل الى </label>
  <div class="col-sm-10">
<select name="selected" required >
	<option value="{{App\Pointer::$Council}}">مجلس الإدارة</option>
  	<option value="{{App\Pointer::$Jalyat}}">قسم الجاليات</option>
	<option value="{{App\Pointer::$Issued}}">قسم الصادر</option> 
	<option value="{{App\Pointer::$Library}}">قسم المكتبة</option>
	<option value="{{App\Pointer::$Media}}">قسم الإعلام</option>
	<option value="{{App\Pointer::$Services}}">قسم الخدمات</option>
	
</select>

</div>

    </div>
    

      </div>
      <div class="modal-footer">
      

      	<button type="submit" class="btn btn-primary">تحويل</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
    </form> 
      </div>
    </div>
  </div>
</div>

@endif
@endif
                        </div>
                        <!-- /.panel-body -->
                    </div>









                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>


@endforeach
@include('cpac/style/footer')