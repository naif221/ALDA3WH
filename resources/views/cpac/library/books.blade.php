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
                                            <th>خصم/اضافة</th>
                                            <th>تعديل</th>
                                            <th>حذف</th>
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
{!! Form::open(['url' => 'edit-in-stock' , 'method' => 'POST']) !!}
                                            
<div class="input-group add-minus">
          <span class="input-group-btn">
          
              <a type="button"  href="{{ url('decrasebook/'.$book->id) }}" class="form-control btn btn-danger btn-number" action="" onclick="return confirm('هل تريد خصم كتاب واحد من المخزون؟')" >
                <span class="glyphicon glyphicon-minus"><b> 1</b></span>
              </a>
          </span>
          <span class="input-group-btn">
              <a type="button"   href="{{ url('incrementbook/'.$book->id) }}"  class="form-control btn btn-success btn-number"  onclick="return confirm('هل تريد اضافة كتاب واحد للمخزون؟')" >
                  <span class="glyphicon glyphicon-plus"><b> 1</b></span>
              </a>
          </span>
         
      </div>


{!! Form::close() !!}	
</td>
                                <form  method="get" action="{{ url('edit-book') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" type="text" name="id" value="{{$book->id}}">  
                         		<td><center>
                         		<button type="submit" class="btn btn-primary">
                         		<i class="fa fa-pencil-square-o " aria-hidden="true">
                         		        </i></button>
                                            </center>

                                </td>
                         		</form> 
                                <td>
<button class="btn btn-danger" onclick="return confirm('تأكيد الحذف؟')" >
                                 <i class="fa fa-trash-o " aria-hidden="true"></i></button>
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