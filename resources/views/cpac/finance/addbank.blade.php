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
                        أضافة 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        
   <h3> اضافة بنك</h3>
     <div class="table-responsive">        		
  <table class="table table-striped">
    <thead>
      <tr>
        <th>البنك</th>
        <th>المبلغ المتوفر</th>
      </tr>
    </thead>
    <tbody>
{!! Form::open(['url' => 'addbank' , 'method' => 'POST']) !!}
      <tr>
        <td><input type="text"  name="bank" value="" ></td>
        <td><input type="text"  name="price" value="" ></td>
      </tr>
    </tbody>
  </table>
</div>         
             </div>               
               
<center>

<button  class="btn btn-success" type="submit" > حفظ <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
<button  class="btn btn-muted" onclick="goBack()"> الغاء <i class="fa fa-ban" aria-hidden="true"></i></button>


</center>              
{{ Form::close() }}
                            
                            </div>
                            <!-- /.list-group -->
                              </div>
                        <!-- /.panel-body -->
                        </div>
                <!-- /.col-lg-12 -->
            </div>
            

@include('cpac/style/footer')