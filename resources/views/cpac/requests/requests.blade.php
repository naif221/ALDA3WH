@include('cpac/style/header')
@include('cpac/style/slider')


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">الطلبات</h1>

@if(session('success'))

@include('cpac.style.success', ['success' => session('success')])
@endif

@if(Auth::user()->department_id !== App\Pointer::$Manager)
                    <a  class="btn btn-primary"   href="{{ url('new-request') }}" >
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i> طلب جديد</a>

@endif
<br>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            الطلبات
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                        <div>

  <!-- Nav tabs -->
  
  <ul class="nav nav-tabs centered" role="tablist">
    <li role="presentation" class="active"><a href="#requests" aria-controls="requests" role="tab" data-toggle="tab">الطلبات الحالية</a></li>
    <li role="presentation"><a href="#oldrequests" aria-controls="oldrequests" role="tab" data-toggle="tab">الطلبات القديمة</a></li>
    </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="requests">

    <br>
    <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                    <thead>
                                        <tr>
                                            <th>رقم الطلب</th>
                                            <th>الوقت/التاريخ</th>
                                            <th>القسم</th>
                                            <th>نوع الطلب</th>
                                            <th>العنوان</th>
                                            <th>الحالة</th>
                                            <th></th>
                                            <th></th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                    
                                     		@foreach($requests as $request)
                                        <tr class="odd gradeX">
                                        	<td>{{$request->id}}</td>
                                        	<td>{{$request->created_at}}</td>
                                        	<td>{{$request->department_name}}</td>
                                        	@if(is_null($request->price))
                                        	<td>طلب عادي</td>
											@else 
                                        	<td>طلب مالي</td>
                                        	@endif
                                        	<td>{{$request->title}}</td>
                                        	<td>{{$request->state}}</td>
                                        	
                                <form  method="POST" action="{{ url('details-request') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" type="text" name="id" value="{{$request->id}}">  
                         			<td>
                         			<center>
                         			<button type="submit" class="btn btn-info">
                 					<i class="glyphicon glyphicon-new-window" aria-hidden="true"></i> التفاصيل </button>
                         			</center>
                 					
                         		</form> 
                         			<td>
@if(Auth::user()->id === $request->user_id)
                         		<center>
                                <form  method="POST" action="{{ url('delete-request') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" type="text" name="id" value="{{$request->id}}">  
                                 <button class="btn btn-danger" onclick="return confirm('تأكيد الحذف؟')" >
                                 <i class="fa fa-trash-o" aria-hidden="true"> حذف الطلب</i></button>
                 					
                         		</form> 
@endif
                         		</center>
                                     </td>
											
                 @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
    
    </div>
    <div role="tabpanel" class="tab-pane" id="oldrequests"> 
    
    <br>
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example2" >
                                    <thead>
                                        <tr>
                                            <th>رقم الطلب</th>
                                            <th>الوقت/التاريخ</th>
                                            <th>القسم</th>
                                            <th>نوع الطلب</th>
                                            <th>العنوان</th>
                                            <th>الحالة</th>
                                            <th></th>
                                            <th></th>
                                            
                                            </tr>
                                    </thead>
                                    <tbody>
                                    
                                     		@foreach($oldrequests as $request)
                                        <tr class="odd gradeX">
                                        	<td>{{$request->id}}</td>
                                        	<td>{{$request->created_at}}</td>
                                        	<td>{{$request->department_name}}</td>
                                        	@if(is_null($request->price))
                                        	<td>طلب عادي</td>
											@else 
                                        	<td>طلب مالي</td>
                                        	@endif
                                        	<td>{{$request->title}}</td>
                                        	<td>{{$request->state}}</td>
                                        	<td>
                                        	 <form  method="POST" action="{{ url('details-request') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" type="text" name="id" value="{{$request->id}}">  
                         			
                         			<center>
                         			<button type="submit" class="btn btn-info">
                 					<i class="glyphicon glyphicon-new-window" aria-hidden="true"></i> التفاصيل </button>
                         			</center>
                 					
                         		</form> 
                         		</td>
                                 <td>
                                 <form  method="POST" action="{{ url('delete-request') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" type="text" name="id" value="{{$request->id}}">  
                                 <button class="btn btn-danger" onclick="return confirm('تأكيد الحذف؟')" >
                                 <i class="fa fa-trash-o" aria-hidden="true"> حذف الطلب</i></button>
                 				
                         		</form> 
                         		</center>
                                 </td>	
											
                 @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                           </div>
  </div>

</div>

                         

                            
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>

                               

<script>
$(document).ready(function() {
    $('table.display').DataTable();
} );
</script>





                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>



@include('cpac/style/footer')