@include('cpac/style/header')
@include('cpac/style/slider')

	

<center>
<div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
               
                    <h3 class="page-header">الرئيسية</h3>
                   
                <h4>مرحبا بك يا {{Auth::user()->name}}
                
                <br>
                القسم :  {{App\Department::find(Auth::user()->department_id)->department_name}}
                </h4>

                
                   <br>
                   <hr>
</div>

                   <a href="profile" > <i class="fa fa-user-circle fa-5x"></i> <br>الملف الشخصي</a>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>


</center>






@include('cpac/style/footer')