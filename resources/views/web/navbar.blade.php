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
        <script src="js/moment-hijri.js"></script>
        <title>مركز الدعوة والإرشاد بعفيف</title>
        
        
        </head>
      
      <body>
      
     
      <nav class="navbar navbar-new">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
      

    </div>
    
      <div class="textnavbar">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7 ">
        
        <?php
  function intPart($float)
  {
      if ($float < -0.0000001)
          return ceil($float - 0.0000001);
      else
          return floor($float + 0.0000001);
  }
  
  
  function Greg2Hijri($day, $month, $year, $string = false)
  {
      $day   = (int) $day;
      $month = (int) $month;
      $year  = (int) $year;
  
  
      if (($year > 1582) or (($year == 1582) and ($month > 10)) or (($year == 1582) and ($month == 10) and ($day > 14)))
      {
          $jd = intPart((1461*($year+4800+intPart(($month-14)/12)))/4)+intPart((367*($month-2-12*(intPart(($month-14)/12))))/12)-
          intPart( (3* (intPart(  ($year+4900+    intPart( ($month-14)/12)     )/100)    )   ) /4)+$day-32074;
      }
      else
      {
          $jd = 367*$year-intPart((7*($year+5001+intPart(($month-9)/7)))/4)+intPart((275*$month)/9)+$day+1729777;
      }
  
  
      $l = $jd-1948440+10632;
      $n = intPart(($l-1)/10631);
      $l = $l-10631*$n+354;
      $j = (intPart((10985-$l)/5316))*(intPart((50*$l)/17719))+(intPart($l/5670))*(intPart((43*$l)/15238));
      $l = $l-(intPart((30-$j)/15))*(intPart((17719*$j)/50))-(intPart($j/16))*(intPart((15238*$j)/43))+29;
      
      $month = intPart((24*$l)/709);
      $day   = $l-intPart((709*$month)/24);
      $year  = 30*$n+$j-30;
      
      $date = array();
      $date['year']  = $year;
      $date['month'] = $month;
      $date['day']   = $day;
  
  
      if (!$string)
          return $date;
      else
          return     "{$year}-{$month}-{$day}";
  }
  
  
  $hijriDate = Greg2Hijri(date("d"), date("m"), date("Y"));
  
  
  $hijriMonth = array ("محرم", "صفر", "ربيع الاول", "ربيع الثاني", "جمادى الاولى", "جمادى الثاني", "رجب", "شعبان", "رمضان", "شوال", "ذو الحجة", "ذو القعدة");
  
  
  $year = $hijriDate["year"];
  $month = $hijriMonth[$hijriDate["month"]-1];
  $day = $hijriDate["day"];
  
  $nameday=date("l"); 
  
  switch ($nameday) 
  {
  case "Saturday":  
  $nameday="السبت"; 
  break; 
  case "Sunday":  
  $nameday="الأحد"; 
  break;  
  case "Monday":  
  $nameday="الاثنين"; 
  break; 
  case "Tuesday":  
  $nameday="الثلاثاء"; 
  break; 
  case "Wednesday": 
  $nameday="الأربعاء"; 
  break; 
  case "Thursday":  
  $nameday="الخميس"; 
  break; 
  case "Friday":  
  $nameday="الجمعة"; 
  break;
  }
  
  echo $nameday . " " . $hijriDate["day"] . " " . $hijriMonth[$hijriDate["month"]-1]  . " ". $hijriDate["year"]  ;
  ?>
  </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5" align="left">
  
        <?php
    # $json_string = file_get_contents("http://api.wunderground.com/api/c464a54a641b4521/geolookup/conditions/lang:AR/q/sa/riyadh.json");
    # $parsed_json = json_decode($json_string);
    #$location = $parsed_json->{'location'}->{'city'};
    #$temp_c = $parsed_json->{'current_observation'}->{'temp_c'};
    #echo "Current temperature in ${location} is: ${temp_c}\n";
    
    
    $key = "3ad9bd34f0c84d83a11161329172612";
      $city = 'afif';
      $forcast_days='1';
      $url = "http://api.apixu.com/v1/forecast.json?lang=AR&key=$key&q=$city&days=" ;
      
      $ch = curl_init();  
      curl_setopt($ch,CURLOPT_URL,$url);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
      
      $json_output=curl_exec($ch);
      $weather = json_decode($json_output);
      
      
      $days = $weather->forecast->forecastday;
      
      foreach ($days as $day){
            
          echo "  عفيف ";
          echo   "ْ" . $weather->current->temp_c;
          
          echo  "<img style='width:30px;' src=' {$day->day->condition->icon}'/></td></tr>";
              
          
      }
      ?>
      </div>      
      </div>
      </nav>






      <div class="container">
        <div class="row">
        <div class="top_bar">
      
      
        <br>
            <center>
            <div class="col-md-3 col-sm-4 col-xs-12   ">
                  <img src="{{ ('images/logo.png') }}" width="303px;" >
                 </div>
            
                 <div class="col-md-6 col-sm-3 col-xs-12 ">
                
                 </div>


            <div class="col-md-3 col-sm-5 col-xs-12 ">

            <iframe id="iframe1" style="background: rgb(255, 255, 255); border: none; width: 100%; overflow: hidden; height: 159px;" src="https://timesprayer.today/widget_frame.php?frame=1&amp;id=4&amp;sound=false&amp;changecity=false&amp;theme=w3-green" __idm_frm__="200"></iframe></div>
                </center>
                  <br> 
    </div>
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
            
               <li class="active" > <a href="Home"><span class="glyphicon glyphicon-home"></span>&nbspالرئيسية<span class="sr-only">(current)</span></a></li>
       <li ><a href="About"><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp عن المكتب و اعمالة</a></li>
          <li><a href="Library"><i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp المكتبة</a></li>
              
            </ul>
        </div>
      
      </nav>
