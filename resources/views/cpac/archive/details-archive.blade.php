@include('cpac/style/header')
@include('cpac/style/slider')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <br>
                
<a  class="btn btn-default" onclick="goBack()"> <i class="fa fa-chevron-right" aria-hidden="true"></i> رجوع</a>

                    <h1 class="page-header">الصادر</h1>

                    
                   

                    <div class="panel panel-default">
                        <div class="panel-heading">
                       
                            تفاصيل المعاملة
                            </span>
                            <span class="pull-left" style="margin-top: -7px">
                            <button class="btn btn-danger" onclick="deleted()" > حذف المعاملة <i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            </span>
                            </span>
                            <span class="pull-left" style="margin-top: -7px">
                            <button class="btn btn-success" href="" > تحميل المرفقات <i class="fa fa-download" aria-hidden="true"></i></button>
                            </span>
                         
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            


    <div class="form-group row">
    <label class="col-sm-2 col-form-label">رقم المعاملة</label>
    <div class="col-sm-10">
    <p>{{$Iss['id']}}<p>
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">العنوان</label>
    <div class="col-sm-2">
    <p>{{$Iss['title']}}<p>
    </div>

    
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">بواسطة</label>
    <div class="col-sm-2">
    <p>{{$Iss['name']}}<p>
    </div>

    <label class="col-sm-2 col-form-label">الوقت و التاريخ</label>
    <div class="col-sm-2">
    <p>{{$Iss['created_at']}}<p>
    </div>
    </div>
    </div>
    
    <div class="form-group row">
    <label class="col-sm-2 col-form-label"> المحتوى</label>
    <div class="col-sm-10">
    <div class="thumbnail" >
    <img  src="$Iss->file_path"  >
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