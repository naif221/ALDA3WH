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
                                            <th>الباركود</th>
                                            <th>الاسم</th>
                                            <th>المؤلف</th>
                                            <th>اللغة</th>
                                            <th>العدد المتوفر</th>
                                            <th>تعديل/حذف</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                    
@foreach($books as $book)
                                        <tr class="odd gradeX">
                                        	<td>{{$book->id}}</td>
                                        	<td>{{$book->barcode}}</td>
                                        	<td>{{$book->name}}</td>
                                        	<td>{{$book->author->name}}</td>
                                        	<td>{{$book->language->language}}</td>
                                        	<td>{{$book->in_stock}}</td>
                                            <td>
{!! Form::open(['url' => '' , 'method' => 'POST']) !!}
                                            
<div class="input-group add-minus">
          <span class="input-group-btn">
              <button type="button" class="btn btn-danger btn-number"  onclick="minus()" >
                <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>
          <input type="text"  class="form-control input-number"  value="100" id="count">
          <span class="input-group-btn">
              <button type="button" class="btn btn-success btn-number"  onclick="plus()" >
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>
          <span class="input-group-btn">
              <button type="button" style="width: 45px; margin-right:5px;" class="btn btn-info btn-number" data-toggle="modal" data-target="#myModal" >
                  <span class="glyphicon glyphicon-floppy-disk"></span>
              </button>
          </span>
      </div>


<!--start confirm save number book in stock	-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <br>
      </div>
      <div class="modal-body">
       هل تريد حفظ التغيرات على العدد المتوفر؟
      <br>
      <br>
        <button type="submit" class="btn btn-primary">حفظ</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
       
      </div>
  </div>
</div>
</div>

<!--end confirm save number book in stock	-->
{!! Form::close() !!}
</td>
                                            <td><center>
                                            <a href="edit-book"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                                            <a href="" onclick="return confirm('تأكيد الحذف؟')" ><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
                                            </center>
                                        </td>
               
                                        </tr>
@endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>

<script>

 var count = document.getElementById('count').value;

    var countEl = document.getElementById("count");
    function plus(){
        count++;
        countEl.value = count;
    }
    function minus(){
      if (count > 1) {
        count--;
        countEl.value = count;
      }  
    }


</script>


<style>
.add-minus{
    width: 185px;
    margin: 0px auto;
    
  }
</style>


                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>



@include('cpac/style/footer')