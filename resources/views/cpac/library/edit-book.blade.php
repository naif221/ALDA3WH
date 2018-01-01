@include('cpac/style/header')
@include('cpac/style/slider')

	

<div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                <br>
                
<a  class="btn btn-default" onclick="goBack()"> <i class="fa fa-chevron-right" aria-hidden="true"></i> رجوع</a>

                    <h1 class="page-header">المكتبة</h1>

@if($errors->has('name'))

@include('cpac.style.error' , ['Error' => "يجب ان لا يكون حقل اسم الكتاب فارغ."])		
	
@endif
@if($errors->has('author_id'))

@include('cpac.style.error' , ['Error' => "يجب ان لا يكون حقل المولف فارغ."])		
	
@endif
@if($errors->has('author'))

@include('cpac.style.error' , ['Error' => "يجب ان لا يكون حقل المولف فارغ."])		
	
@endif
@if($errors->has('language_id'))

@include('cpac.style.error' , ['Error' => "يجب الا يكون حقل اللغة فارغ."])		
	
@endif 
@if($errors->has('in_stock'))

@include('cpac.style.error' , ['Error' => "يجب ان لا يكون حقل العدد المتوفر فارغ."])		
	
@endif 
        
                    <div class="panel panel-default">
                        <div class="panel-heading">
تعديل بيانات كتاب                         </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


{!! Form::open(['url' => 'edit-book' , 'method' => 'POST']) !!}

                       

                       
                        <div class="form-group row">
    <label class="col-sm-2 col-form-label">الاسم</label>
    <div class="col-sm-10">
      <input type="text"  name="name"  value="{{$Book->name}}" >
    </div>
  </div>    


  <div class="form-group row">
    <label class="col-sm-2 col-form-label">الرقم التسلسلي</label>
    <div class="col-sm-10">
      <input type="text"  name="barcode"  value="{{$Book->barcode}}" >
    </div>
  </div>  
@foreach($Author as $author)
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">المؤلف</label>
    <div class="col-sm-10">
    <select name="author_id"  >
  <option value="{{$author->id}}">{{$author->name}}</option>
</select>
    </div>
  </div>
@endforeach
  

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">العدد المتوفر</label>
    <div class="col-sm-10">
      <input type="text"  name="in_stock" value="{{$Book->in_stock}}">
    </div>
  </div>
  
@foreach($Lang as $lang)
  <div class="form-group row">
  <label class="col-sm-2 col-form-label"> اللغة</label>
  <div class="col-sm-10">
<select name="language_id"  >
  <option value="{{$lang->id}}">{{$lang->language}}</option>
</select>

</div>

    </div>
@endforeach
<center>
<input type="hidden" type="text" name="id" value="{{$Book->id}}">  
<button  class="btn btn-success" type="submit" > حفظ <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
<button  class="btn btn-muted" onclick="goBack()"> الغاء <i class="fa fa-ban" aria-hidden="true"></i></button>


{!! Form::close() !!}

</center>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                



                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>









@include('cpac/style/footer')