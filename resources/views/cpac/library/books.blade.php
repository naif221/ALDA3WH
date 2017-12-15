@include('cpac/style/header')
@include('cpac/style/slider')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">المكتبة</h1>

                    
                    <a  class="btn btn-primary"   href="new-book" >
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i> اضافة كتاب جديد </a>


<br>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            الكتب
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>رقم الكتاب</th>
                                            <th>الرقم التسلسلي</th>
                                            <th>الاسم</th>
                                            <th>المؤلف</th>
                                            <th>اللغة</th>
                                            
                                            <th>العدد المتوفر</th>
                                            <th>تعديل/حذف</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                    
                                     
                                        <tr class="odd gradeX">
                                        	<td></td>
                                        	<td></td>
                                        	<td></td>
                                        	
                                        	<td></td>
                                        	<td></td>
                                            <td></td>
                                            <td><center>
                                            <a href="edit-book"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                                            <a href="" onclick="deleted()" ><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
                                            </center>
                                        </td>
               
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