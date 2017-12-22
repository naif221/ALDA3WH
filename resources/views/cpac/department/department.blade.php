@include('cpac/style/header')
@include('cpac/style/slider')

<div id="page-wrapper">
            <div class="row">
            
@if(session('success'))

@include('cpac.style.success', ['success' => session('success')])
@endif
                <div class="col-lg-12">
                    <h1 class="page-header">الاقسام</h1>

                    <a  class="btn btn-primary"   href="new-department" >
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i> قسم جديد</a>


<br>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            الاقسام
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>رقم القسم</th>
                                            <th>الاسم</th>
                                            <th>الوصف</th>
                                            <th>عدد الموظفين</th>
                                            <th>عدد الطلبات</th>
                                            <th>تعديل</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                    
@foreach($Dep as $dep)
                                        <tr class="odd gradeX">
                                        	<td>{{$dep->id}}</td>
                                        	<td>{{$dep->department_name}}</td>
                                        	@if(is_null($dep->description))
                                        	<td>لا يوجد وصف</td>
                                            @else 
                                            <td>{{$dep->description}}</td>
                                            @endif
                                            <td>{{count($dep->user)}}</td>
                                            <td>{{count($dep->request)}}</td>
                                            <td><center>
                                <form  method="GET" action="{{ url('edit-department') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" type="text" name="id" value="{{$dep->id}}">  
                         		<button type="submit" class="btn btn-info" >
                 				<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
                         		</form> 
                                            </center></td>
                                        	
                
                                        </tr>
@endforeach
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