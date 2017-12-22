@include('cpac/style/header')
@include('cpac/style/slider')

<div id="page-wrapper">
            <div class="row">
            
@if(session('success'))
@include('cpac.style.success', ['success' => session('success')])
@endif
                <div class="col-lg-12">
                    <h1 class="page-header">الموظفين</h1>
                    <a  class="btn btn-primary"   href="{{ url('new-employees') }}" >
                    <i class="fa fa-user-plus" aria-hidden="true"></i> اضافة موظف </a>

<br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            الموظفين
                        </div>
                        <!-- /.panel-heading -->

<br>
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
                                
                                <thead>
                                    <tr>
                                       <th>رقم الموظف</th>
                                        <th>الاسم</th>
                                        <th>البريد الالكتروني</th>
                                        <th>رقم الجوال</th>
                                        <th>القسم</th>
                                        <th>تعديل</th>
                                    </tr>
                                </thead>
                                <tbody>
     
                                    @foreach($users as $user)
                                    
                                    <tr class="odd gradeX">
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->department->department_name}}</td>
                                        <td><center>
                                        
                                <form  method="GET" action="{{ url('edit-employee') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" type="text" name="id" value="{{$user->id}}">  
                         			<button type="submit" class="btn btn-info" >
                 					<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
                         		</form> 
                                            </center>
                                        </td>
                                    </tr>
                                        @endforeach

                                </tbody>
                            </table>
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>


                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

@include('cpac/style/footer')