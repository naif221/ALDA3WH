@include('cpac/style/header')
@include('cpac/style/slider')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">الاعلام</h1>

                    
                    <a  class="btn btn-primary"   href="{{ url('new-news') }}" >
                    <i class="fa fa-plus-square" aria-hidden="true"></i> اضافة خبر جديد</a>


<br>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            الاخبار
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>الرقم</th>
                                            <th>الوقت/التاريخ</th>
                                            <th>بواسطة</th>
                                            <th> الخبر</th>
                                         
                                            </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <tr class="odd gradeX">
                                        	<td></td>
                                        	<td></td>
                                        	<td></td>
                                        	<td>
                 <a  class="btn btn-info"   href="" >
                 <i class="glyphicon glyphicon-new-window" aria-hidden="true"></i> عرض </a>
                 <a class="btn btn-warning" href="edit-news">
                 <i class="fa fa-pencil-square-o " aria-hidden="true"></i> تعديل</a>
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