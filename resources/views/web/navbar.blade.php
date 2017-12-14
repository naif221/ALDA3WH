<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ url('css/bootstrap-rtl.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/style.css') }}" rel="stylesheet">
        <link href="{{ url('css/home.css') }}" rel="stylesheet">
        <link href="{{ url('css/cairo-font.css') }}" rel="stylesheet">

        <title> </title>
        
        
        </head>
      
      <body>
      
      
      
      <div class="top_bar">
      
      
            <br>
            <center>
      <img src="{{ ('images/logo1.png') }}" >
      </center>
      
      <br>
      
      
      </div>
      <nav class="navbar navbar- navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            
               <li class="active" > <a href="#"><span class="glyphicon glyphicon-home"></span>&nbspالرئيسية<span class="sr-only">(current)</span></a></li>
       <li ><a href="{{Route('web.about')}}"><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp عن المكتب و اعمالة</a></li>
          <li><a href="{{Route('web.library')}}"><i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp المكتبة</a></li>
              
            </ul>
        </div>
      
      </nav>
      
      <div class="container">
        <div class="row">
      
    

