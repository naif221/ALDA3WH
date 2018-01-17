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
                            الرئيسية 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        
                     <h3>تاريخ خصم المبالغ</h3>
                     <div class="table-responsive">
  <table width="100%" class="table table-striped">
    <thead>
      <tr>
        <th>التاريخ/الوقت</th>
        <th>المبلغ</th>
        <th>الطلب</th>
		<th>تمت بواسطة</th>
		<th>تفاصيل الطلب</th>
		
      </tr>
    </thead>
    <tbody>
@foreach($History as $history)
    <tr >
        <td>{{$history->created_at}}</td>
        <td>{{$history->request->price}}</td>
        <td>{{$history->request->title}}</td>
        <td>{{$history->user->name}}</td>
        <td>
        
     <form  method="POST" action="{{ url('details-request') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" type="text" name="id" value="{{$history->request_id}}">  
 <button type="submit" class="btn btn-info">
  	<i class="glyphicon glyphicon-new-window" aria-hidden="true"></i> التفاصيل </button>
                 					
      	</form> 
        
        </td>
      </tr>
@endforeach
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