@include('cpac/style/header')
@include('cpac/style/slider')

<div id="page-wrapper">
            <div class="row">
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
                                            <th>تعديل</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                    
                                     	
                                        <tr class="odd gradeX">
                                        	<td>1</td>
                                        	<td>الجاليات</td>
                                        	<td>At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologie</td>
                                            <td><center>
                                            <a href="edit-department"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                                            </center></td>
                                        	
                                        	
                
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