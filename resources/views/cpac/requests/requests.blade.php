@include('cpac/style/header')
@include('cpac/style/slider')

<script src="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/jszip-3.1.3/pdfmake-0.1.27/dt-1.10.15/af-2.2.0/b-1.3.1/b-colvis-1.3.1/b-flash-1.3.1/b-html5-1.3.1/b-print-1.3.1/cr-1.3.3/fc-3.2.2/fh-3.1.2/kt-2.2.1/r-2.1.1/rg-1.0.0/rr-1.2.0/sc-1.4.2/se-1.2.2/datatables.js"></script>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">الطلبات</h1>

                    
                    <a  class="btn btn-primary"   href="{{ url('new-request') }}" >
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i> طلب جديد</a>


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
                                <table class="display table table-striped table-bordered" >
                                    <thead>
                                        <tr>
                                            <th>رقم الطلب</th>
                                            <th>الوقت/التاريخ</th>
                                            <th>القسم</th>
                                            <th>نوع الطلب</th>
                                            <th>العنوان</th>
                                            <th>الحالة</th>
                                            <th></th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                    
                                     	@if(count($requests) > 0)
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
                         			<button type="submit" class="btn btn-info">
                 					<i class="glyphicon glyphicon-new-window" aria-hidden="true"></i> التفاصيل </button>
                 					</td>
                         		</form> 
                         		
                         		
                         		
											
                 @endforeach
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
    
    </div>
    <div role="tabpanel" class="tab-pane" id="oldrequests"> 
    
    <br>
    <div class="table-responsive">
    <table class="display table table-striped table-bordered" >
                                    <thead>
                                        <tr>
                                            <th>رقم الطلب</th>
                                            <th>الوقت/التاريخ</th>
                                            <th>القسم</th>
                                            <th>نوع الطلب</th>
                                            <th>العنوان</th>
                                            <th>الحالة</th>
                                            <th></th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                    
                                     	@if(count($requests) > 0)
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
                         			<button type="submit" class="btn btn-info">
                 					<i class="glyphicon glyphicon-new-window" aria-hidden="true"></i> التفاصيل </button>
                 					</td>
                         		</form> 
                         		
                         		
                         		
											
                 @endforeach
                                        </tr>
                                        @endif
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