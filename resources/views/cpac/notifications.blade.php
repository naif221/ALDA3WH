@include('cpac/style/header')
@include('cpac/style/slider')






<div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                <br>
                
<a  class="btn btn-default" onclick="goBack()"> <i class="fa fa-chevron-right" aria-hidden="true"></i> رجوع</a>

                    <h1 class="page-header">الاشعارات</h1>

                    


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> الاشعارات 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        
                            
                            
                            
                            
                        <ul class="nav nav-tabs centered" role="tablist">
    <li role="presentation" class="active"><a href="#notifications" aria-controls="notifications" role="tab" data-toggle="tab">الاشعارات الجديدة</a></li>
    <li role="presentation"><a href="#oldnotifications" aria-controls="oldnotifications" role="tab" data-toggle="tab">الاشعارات القديمة </a></li>
    </ul>
    <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="notifications">
@foreach($newlist as $Nlist)        

<form  method="post" action="{{ url('details-request') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" type="text" name="id" value="{{$Nlist->request->id}}">  
<input type="hidden" type="text" name="newnoti" value="{{$Nlist->id}}">  

    <Button class="list-group-item">    
    <p>{{$Nlist->request->title}}</p>
    <p align="left" class="pull-right text-muted small">{{$Nlist->created_at}}</p>
                            <br>
    </Button>
</form>                       
@endforeach                                  
</div>                        

<div role="tabpanel" class="tab-pane" id="oldnotifications"> 
    <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="notifications">
@foreach($oldlist as $Nlist)        
<form  method="post" action="{{ url('details-request') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" type="text" name="id" value="{{$Nlist->request->id}}"> 
 
    <Button class="list-group-item">    
    <p>{{$Nlist->request->title}}</p>
    <p align="left" class="pull-right text-muted small">{{$Nlist->created_at}}</p>
                            <br>
    </Button>
</form>                       
@endforeach                                 
</div>                        
</form>   
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