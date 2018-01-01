@include('cpac/style/header')
@include('cpac/style/slider')


@foreach($details as $detail)

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12 ">
                <br>
                
<a  class="btn btn-default" onclick="goBack()"> <i class="fa fa-chevron-right" aria-hidden="true"></i> رجوع</a>

                    <h1 class="page-header">الطلبات</h1>

                    


<br>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            تفاصيل الطلب
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" id="printthis">
  
    <div class="form-group row">
    <label class="col-xs-2 col-form-label">رقم الطلب</label>
    <div class="col-xs-2">
    <p>{{$detail->id}}<p>
    </div>
    </td>
    <td>
    <label class="col-xs-2 col-form-label">الحالة</label>
    <div class="col-xs-2">
    <p>{{$detail->state->title}}<p>
    </div>
    </div>

    <div class="form-group row">
    <label class="col-xs-2 col-form-label">مقدم الطلب</label>
    <div class="col-xs-2">
    <p>{{$detail->user->name}}<p>
    </div>
    <label class="col-xs-2 col-form-label">القسم</label>
    <div class="col-xs-2">
    <p>{{$detail->user->department->department_name}}<p>
    </div>
    <label class="col-xs-2 col-form-label">الوقت و التاريخ</label>
    <div class="col-xs-2">
    <p>{{$detail->created_at}}<p>
    </div>
    </div>


    <div class="form-group row">
    <label class="col-xs-2 col-form-label">نوع الطلب</label>
    <div class="col-xs-2">
    @if(is_null($detail->price))
    
    <p>طلب عادي<p>
    
    @else
    <p>طلب مالي<p>
    </div>

    <label class="col-xs-2 col-form-label">القيمة</label>
    <div class="col-xs-2">
    <p>{{$detail->price}}<p>
    @endif
    </div>
    </div>

<hr>
<br>
    <div class="form-group row">
    <label class="col-xs-2 col-form-label">العنوان</label>
    <div class="col-xs-2">
    <p>{{$detail->title}}<p>
    </div>
    </div>

    <div class="form-group row">
    <label class="col-xs-2 col-form-label">المحتوى</label>
    <div class="col-xs-10">
    <p>
		{!! $detail->content !!}
	<p>
    </div>
    </div>

</div>

<script language="javascript">
function PrintMe(printthis) {

  var divElements = document.getElementById(printthis).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              " <style media='print'>@page {size: auto;margin: 20px 20px 20px 20px;}</style><html><head><title></title></head><body> <center><img src=images/logo1.png ></center><br><br>" + 
              divElements + "<img style='position: absolute; left: 0; bottom: 0;' src='images/.png'  ></body>";

            //Print Page
            window.print();

           
            document.body.innerHTML = oldPage;
            document.title = "الطلبات"; 
            
            
        }

</script>


@if($detail->state_id == App\Pointer::$UnderStudy | $detail->state_id == App\Pointer::$UnderStudyFromCouncil )
@if(Auth::user()->department_id == App\Pointer::$Manager | Auth::user()->department_id == App\Pointer::$Council)
<form  method="POST" action="{{ url('request-accept') }}">
<center>

<table>

<td>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" type="text" name="id" value="{{$detail->id}}">  
<button  class="btn btn-success" > قبول <i class="fa fa-check-square-o" aria-hidden="true"></i></button>
</form> 
</td>
<td>
<form  method="POST" action="{{ url('request-reject') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" type="text" name="id" value="{{$detail->id}}">  
<button  class="btn btn-danger" > رفض <i class="fa fa-times-circle" aria-hidden="true"></i></button>
</form> 
</td>

@endif
@if(Auth::user()->department_id == App\Pointer::$Manager)

<td>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">تحويل <i class="fa fa-undo" aria-hidden="true"></i>
</button>
</td>

@endif
@endif
<center>
<td>
<button  class="btn btn-info" onclick="javascript:PrintMe('printthis')"/>طباعة <i class="fa fa-print" aria-hidden="true"></i></button>
</td>



</table>
</center>


</div>
</div>
<!-- panel -->


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

                        </div>
                        <!-- /.col-lg-12" -->
                    </div>
 <!-- /.row -->








                </div>
                <!-- /.page-wrapper -->
        

@endforeach
@include('cpac/style/footer')