@include('cpac/style/header')
@include('cpac/style/slider')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <br>
                
<a  class="btn btn-default" onclick="goBack()"> <i class="fa fa-chevron-right" aria-hidden="true"></i> رجوع</a>

                    <h1 class="page-header">الطلبات</h1>

                    


<br>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            تفاصيل الطلب
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            


    <div class="form-group row">
    <label class="col-sm-2 col-form-label">رقم الطلب</label>
    <div class="col-sm-10">
    <p>11<p>
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">مقدم الطلب</label>
    <div class="col-sm-2">
    <p>mohammed<p>
    </div>
    <label class="col-sm-2 col-form-label">القسم</label>
    <div class="col-sm-2">
    <p>الجاليات<p>
    </div>
    <label class="col-sm-2 col-form-label">الوقت و التاريخ</label>
    <div class="col-sm-2">
    <p>2017-12-06 18:14:34<p>
    </div>
    </div>


    <div class="form-group row">
    <label class="col-sm-2 col-form-label">نوع الطلب</label>
    <div class="col-sm-2">
    <p>طلب مالي<p>
    </div>
    <label class="col-sm-2 col-form-label">القيمة</label>
    <div class="col-sm-2">
    <p>525<p>
    </div>
    </div>





    <div class="form-group row">
    <label class="col-sm-2 col-form-label">العنوان</label>
    <div class="col-sm-10">
    <p>test testtest<p>
    </div>
    </div>



    <div class="form-group row">
    <label class="col-sm-2 col-form-label">المحتوى</label>
    <div class="col-sm-10">
    <p>At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.<p>
    </div>
    </div>




<center>
<button  class="btn btn-success" > قبول <i class="fa fa-check-square-o" aria-hidden="true"></i></button>
<button  class="btn btn-danger"  > رفض <i class="fa fa-times-circle" aria-hidden="true"></i></button>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">تحويل
<i class="fa fa-undo" aria-hidden="true"></i>
</button>
</center>




<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">تحويل الطلب</h4>
      </div>
      <div class="modal-body">
      <div class="form-group row">
    <label class="col-sm-2 col-form-label">رقم الطلب</label>
    <div class="col-sm-10">
    <p>11<p>
    </div>
    </div>
      <div class="form-group row">
  <label class="col-sm-2 col-form-label">تحويل الى </label>
  <div class="col-sm-10">
<select name="request"  >
  <option value="1"></option>
  <option value="2"></option>
  
</select>

</div>

    </div>
    

      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary">تحويل</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
      </div>
    </div>
  </div>
</div>



                        </div>
                        <!-- /.panel-body -->
                    </div>









                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>



@include('cpac/style/footer')