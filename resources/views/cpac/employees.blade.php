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
                                       
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
   

     
                                    <tr class="odd gradeX">
                                    
                                
                                        <td><a target="_blank" href=""><img class="color1" src=""></a></td>
                                        <td>nanananna</td>
                                      
                                        <td>aa</td>
                                        <td>aa</td>
                                       
                                        <td>aa</td>
                                        <td><center>
                                            <a href=""><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                                            <a href=""><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
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