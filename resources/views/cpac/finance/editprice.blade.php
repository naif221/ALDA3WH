@include('cpac/style/header')
@include('cpac/style/slider')






<div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                <br>
                
<a  class="btn btn-default" onclick="goBack()"> <i class="fa fa-chevron-right" aria-hidden="true"></i> رجوع</a>

                    <h1 class="page-header">المالية</h1>

                    


                    <div class="panel panel-default">
                        <div class="panel-heading">
                        تعديل 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        
                     <h3> تعديل المبالغ المتوفرة في الحسابات</h3>
                         		
  <table class="table table-striped">
    <thead>
      <tr>
        <th>البنك</th>
        <th>المبلغ المتوفر</th>
        <th>خصم -</th>
        <th>اضافة +</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>الراجحي</td>
        <td><input type="text"  name="raj" value="150" >ريال</td>
        <td><input type="text"  name="addraj" value="" >ريال</td>
        <td><input type="text"  name="minraj" value="" >ريال</td>
      </tr>
      <tr>
        <td>الاهلي</td>
        <td><input type="text"  name="ahl" value="300" >ريال</td>
        <td><input type="text"  name="addraj" value="" >ريال</td>
        <td><input type="text"  name="minraj" value="" >ريال</td>
      </tr>
      <tr>
        <td><b> المجموع</b></td>
        <td><b>450 </b></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>         
                            
               
<center>

<button  class="btn btn-success" type="submit" > حفظ <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
<button  class="btn btn-muted" onclick="goBack()"> الغاء <i class="fa fa-ban" aria-hidden="true"></i></button>


</center>              
                            
                            </div>
                            <!-- /.list-group -->
                              </div>
                        <!-- /.panel-body -->
                        </div>
                <!-- /.col-lg-12 -->
            </div>
            

                    @include('cpac/style/footer')