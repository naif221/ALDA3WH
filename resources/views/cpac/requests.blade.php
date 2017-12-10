@include('cpac/style/header')
@include('cpac/style/slider')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">الطلبات</h1>

                    
                    <a  class="btn btn-primary"   href="{{ url('newrequests') }}" >
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i> طلب جديد</a>


<br>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            الطلبات
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                                        	<td>{{$request->user->department->department_name}}</td>
                                        	@if(is_null($request->price))
                                        	<td>طلب عادي</td>
											@else 
                                        	<td>طلب مالي</td>
                                        	@endif
                                        	<td>{{$request->title}}</td>
                                        	<td>{{$request->state->title}}</td>
                                        	<td><a  class="btn btn-info"   href="{{ url('') }}" >
                 <i class="glyphicon glyphicon-new-window" aria-hidden="true"></i> التفاصيل </a></td>
                 @endforeach
<!--                                             <td>121</td> -->

<!--                                             <td>الجاليات</td> -->
<!--                                             <td>طلب مالي</td> -->
<!--                                             <td>طلب طلب طلب جديد جديد طلبات بييبرسرسرس</td> -->
<!--                                             <td>قيد الانتظار</td> -->
<!--                                             <td><a  class="btn btn-info"   href="{{ url('') }}" > -->
<!--                    <i class="glyphicon glyphicon-new-window" aria-hidden="true"></i> التفاصيل </a></td> -->
                                        </tr>
                                        @else 
                                        <p>لا توجد طلبات </p>
                                        @endif
                                        
                                        <tr class="odd gradeX">
                                        <td>121</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="odd gradeX">
                                    <td>121</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>









                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>



@include('cpac/style/footer')