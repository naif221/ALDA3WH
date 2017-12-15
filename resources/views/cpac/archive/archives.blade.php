@include('cpac/style/header')
@include('cpac/style/slider')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">الصادر</h1>

                    
                    <a  class="btn btn-primary"   href="{{ url('new-archive') }}" >
                    <i class="fa fa-upload" aria-hidden="true"></i> رفع معاملة جديدة</a>


<br>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            المعاملات
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th> الرقم</th>
                                            <th>العنوان</th>
                                            <th>بواسطة </th>
                                            <th>التاريخ و الوقت</th>
                                            <th>تحميل المرفق</th>
                                            <th>حذف المعاملة</th>
                                            </tr>
                                    </thead>
                                    <tbody>
@foreach($iss as $is)                                     
                                        <tr class="odd gradeX">
                                        	<td>{{$is->id}}</td>
                                        	<td>{{$is->title}}</td>
                                        	<td>{{$is->user->name}}</td>
                                        	<td>{{$is->created_at}}</td>
                                        	
                                <form  method="get" action="{{ url('download-archive')}}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" type="text" name="id" value="{{$is->id}}">  
                         			<td>
                         			<center>
                                        	<button class="btn btn-success" href="{{Storage::url($is->file_path)}}" >
                                        	<i class="fa fa-download" aria-hidden="true"></i></button>
                         			</center>
                 					</td>
                         		</form> 

                                <form  method="get" action="{{ url('delete-archive')}}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" type="text" name="id" value="{{$is->id}}">  
                         			<td>
                         			<center>
                         			<button type="submit" class="btn btn-danger" >
                 					<i class="fa fa-trash-o" aria-hidden="true"></i></button>
                         			</center>
                 					</td>
                         		</form> 
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