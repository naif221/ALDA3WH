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
        <link href="{{ url('https://fonts.googleapis.com/css?family=Cairo') }}" rel="stylesheet">

        <title> </title>
        
        
        </head>
      
      
      <style>
      * {
      font-family: 'Cairo', sans-serif;
      }
      .bg-primary {
       background-color: red;
       margin-bottom:0px;
      }
      
      .bg-circle
      {
        display: inline-block;
        width: 60px;
        height: 60px;
        padding: 14px 4px;
        color: #ececec;
        text-align: center;
        border-radius: 50%;
      }
      
      .bg-circle-outline
      {
        width: 50px;
        height: 50px;
        color:smoke;
        padding: 8px 2px;
        border: 2px solid;
        border-color: smoke;
        border-radius: 50%;
      }
      
      
      .bg-circle a, a:hover, .media a:focus
      {
        text-decoration: none !important;
        outline: none;
        color: #ececec;
      }
      .bg-circle-outline a, a:hover, .media a:focus
      {
        text-decoration: none !important;
        outline: none;
        color: #ececec;
      }
      
      
      a:hover  {
      text-decoration: none;  
      
      color:inherit;
      }
      a {
      color:inherit;  
      }
      
      .thumbnail:hover{
          opacity:1.00;
          border: 1px solid blue;
          transition: box-shadow 0.5s;
          .vov:hover{
            content: "\e005";
          }
          }
          .text-red {
            color: red;
          }
          .text-dec {
            
            color: #585858;
          }
          .na1 {
            color: white;
            padding-top: 3px;
            padding-right: 3px;
          }
        /* 
      background: #30bed6; /* Old browsers */
      background: -moz-linear-gradient(left, #30bed6 0%, #38cac9 100%); /* FF3.6-15 */
      background: -webkit-linear-gradient(left, #38CB72 0%,#38CB72 100%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to right, #38CB72 0%,#00f15f 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#30bed6', endColorstr='#38cac9',GradientType=1 ); /* IE6-9 */}
      
      .social { list-style-type:none; margin-bottom:0px; float:left; padding:0px; margin-left:0px;}
      .social li { float:left;}
      .social li a { padding:0 10px; font-size:13px; line-height:40px; color:#FFF;}
      
      .rightc { list-style-type:none; margin-bottom:0px; float:right;}
      .rightc li { margin:0px 10px; font-size:13px; float:left; line-height:40px; color:#FFF;}
      .rightc li a {   color:#FFF; }
      
      .navbar-brand img { margin-top:0px; margin-left:0px;}
      .navbar-brand {padding:0px;}
      
      .header_image { margin-top:-70px; float:left;}
      .nav.navbar-nav.navbar-right span {font-family: 'Open Sans', sans-serif; font-style:italic; font-weight:300; color:#1b6977;}
      .navbar-right li a {font-family: 'Open Sans', sans-serif; font-size:16px; color:#1b6977 !important;}
      
      
      #login-dp{
          min-width: 250px;
          padding: 14px 14px 0;
          overflow:hidden;
          background-color:rgba(255,255,255,.8);
      }
      #login-dp .help-block{
          font-size:12px    
      }
      #login-dp .bottom{
          background-color:rgba(255,255,255,.8);
          border-top:1px solid #ddd;
          clear:both;
          padding:14px;
      }
      #login-dp .social-buttons{
          margin:12px 0    
      }
      #login-dp .social-buttons a{
          width: 49%;
      }
      #login-dp .form-group {
          margin-bottom: 10px;
      }
      .btn-fb{
          color: #fff;
          background-color:#3b5998;
      }
      .btn-fb:hover{
          color: #fff;
          background-color:#496ebc 
      }
      .btn-tw{
          color: #fff;
          background-color:#55acee;
      }
      .btn-tw:hover{
          color: #fff;
          background-color:#59b5fa;
      }
      @media(max-width:768px){
          #login-dp{
              background-color: inherit;
              color: #fff;
          }
          #login-dp .bottom{
              background-color: inherit;
              border-top:0 none;
          }
      }
      
      .col-center-block {
          float: none;
          display: block;
          margin: 0 auto;
          /* margin-left: auto; margin-right: auto; */
      }
      
      </style>
        
      
      
      
      <body>
      
      
      
      <div class="top_bar">
      
      
            <br>
            <center>
      <img src="logo1.png" >
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
              <li ><a href="#"><span class="glyphicon glyphicon-film"></span>&nbsp عن المكتب و اعمالة</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp تبرع للمكتب</a></li>
           <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span>&nbsp روزمانة الفعاليات</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp المكتبة</a></li>
              
            </ul>
        </div>
      
      </nav>
      
      <div class="container">
        <div class="row">
      
    

@include('home' )
@include('footer')
