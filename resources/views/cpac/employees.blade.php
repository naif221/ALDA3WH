@include('cpac/style/header')
@include('cpac/style/slider')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">الموظفين</h1>

                    
                    <a  class="btn btn-primary"   href="{{ url('new-employees') }}" >
                   <i class="fa fa-plus" aria-hidden="true"></i> اضافة موظف </a>


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
   

     
                                    <tr class="odd gradeX">
                                    
                                
                                        <td>1</td>
                                        <td>mohammed</td>
                                      
                                        <td>m.alodyani@gmail.com</td>
                                        <td>0562781755</td>
                                       
                                        <td>الجاليات</td>
                                        <td><center>
                                            <a href="edit-employee"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                                            <!-- <a href=""><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a> -->
                                            </center>
                                        </td>
                                    </tr>

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