<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>تسجيل الدخول</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container">
        <div class="row">
<br>
            <div class="col-md-4 col-md-offset-4">
            
        <center><img src="images/logo.png" width="303px;" style="margin-bottom: -60px;"></center>
       
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">  دخول الموظفين</h3>
                    </div>
                    <div class="panel-body">
                   		    <form  method="POST" action="{{ route('login') }}">
								<fieldset>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <input class="form-control" placeholder="اسم المستخدم" name="email" type="email" autofocus>
                                
                                @if ($errors->has('email'))
                                        <strong colore ="">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="كلمة المرور" name="password" type="password" value="">

                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember"  id="remember"type="checkbox" value="1">تذكرني
                                    </label>
                                </div>
                            		<input type="submit" value="تسجيل الدخول" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                         </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
