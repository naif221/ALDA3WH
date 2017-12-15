@include('cpac/style/header')
@include('cpac/style/slider')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">المكتبة</h1>

                    
                    <a  class="btn btn-primary"   href="new-author" >
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i> اضافة مؤلف جديد </a>


<br>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                         مؤلفين الكتب
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>الرقم</th>
                                            <th> اسم المؤلف</th>
                                            <th>عدد الكتب</th>
                                          <!--  <th>تعديل/حذف</th>-->
                                            </tr>
                                    </thead>
                                    <tbody>
@foreach($Author as $author)
                                        <tr class="odd gradeX">
                                        	<td>{{$author->id}}</td>
                                        	<td>{{$author->name}}</td>
                                            <td>{{count($author->books)}}</td>
                                       
                                           <!-- <td><center>
                                            <a href="" onclick="return confirm('تأكيد الحذف؟')" ><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
                                            </center>
                                        </td>-->
               
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