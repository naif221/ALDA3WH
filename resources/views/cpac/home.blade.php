@include('cpac/style/header')
@include('cpac/style/slider')

	

<center>
<div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
               
                    <h3 class="page-header">الرئيسية</h3>
                   
                <h4>مرحبا بك يا {{Auth::user()->name}}</h4>

                
                   <br>
                   <hr>
                   
<!--                    <div class="alert alert-success alert-dismissible" id="myAlert"> -->
<!--     <a class="close">&times;</a> -->

<!--     <strong>Success!</strong> This alert box could indicate a successful or positive action. -->

<!--   </div> -->



<!--   <div class="alert alert-danger alert-dismissible" id="myAlert"> -->
<!--     <a class="close">&times;</a> -->

<!--     <strong>Success!</strong> This alert box could indicate a successful or positive action. -->
    
<!--   </div> -->






</div>

                   <a href="profile" > <i class="fa fa-user-circle fa-5x"></i> <br>الملف الشخصي</a>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>


</center>






@include('cpac/style/footer')