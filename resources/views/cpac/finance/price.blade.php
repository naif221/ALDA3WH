@include('cpac/style/header')
@include('cpac/style/slider')






<div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                <br>
                    <h1 class="page-header">المالية</h1>

                    


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            الرئيسية 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        
                     <h3>المبالغ المتوفرة في الحسابات</h3>
                         			<a href="editprice"><button type="submit" class="btn btn-info ">
                 					<i class="fa fa-pencil-square-o " aria-hidden="true"></i> تعديل </button>
                   </a>

                   <a href="history"><button type="submit" class="btn btn-warning ">
                   <i class="fa fa-calendar" aria-hidden="true"></i> السجل </button>
                   </a>
                   <div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>البنك</th>
        <th>المبلغ المتوفر</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>الراجحي</td>
        <td>150</td>
       
      </tr>
      <tr>
        <td>الاهلي</td>
        <td>300</td>
        
      </tr>
      <tr>
        <td><b> المجموع</b></td>
        <td><b>450 </b></td>
      
      </tr>
    </tbody>
  </table>
</div>         
                            
         </div>                    
                            
                            </div>
                            <!-- /.list-group -->
                              </div>
                        <!-- /.panel-body -->
                        </div>
                <!-- /.col-lg-12 -->
            </div>
            

                    @include('cpac/style/footer')