<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        
        </head>
      
      
<body>
      
 
 
{!! Form::open(['url' => 'newdepartment' , 'method' => 'POST']) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">


		<center>
      	<input type="text"  name="department_name" placeholder="department name">
	  	<br><br>
		<input type="text"  name="description" placeholder="descrption">
		</center>
		

<button name="go" type="submit" class="btn btn-success"> <i class="fa fa-paper-plane" aria-hidden="true"></i> حفظ</button>

{!! Form::close() !!}     

<br><br><br><br>
      
      
{!! Form::open(['url' => 'addstate' , 'method' => 'POST']) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">


		<center>
      	<input type="text"  name="title" placeholder="state title" >
		</center>

<button name="go" type="submit" class="btn btn-success"> <i class="fa fa-paper-plane" aria-hidden="true"></i> حفظ</button>

{!! Form::close() !!}    
      
<br><br><br><br>


{!! Form::open(['url' => 'addlang' , 'method' => 'POST']) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">


		<center>
      	<input type="text"  name="language" placeholder="lang name" >
		</center>

<button name="go" type="submit" class="btn btn-success"> <i class="fa fa-paper-plane" aria-hidden="true"></i> حفظ</button>

{!! Form::close() !!}   

<br><br><br><br>

{!! Form::open(['url' => 'addauthor' , 'method' => 'POST']) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">


		<center>
      	<input type="text"  name="name" placeholder="author name">
		</center>

<button name="go" type="submit" class="btn btn-success"> <i class="fa fa-paper-plane" aria-hidden="true"></i> حفظ</button>

{!! Form::close() !!} 


<br><br><br><br>

{!! Form::open(['url' => 'updatebook' , 'method' => 'POST']) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">


		<center>
      	<input type="text"  name="author_id" placeholder="autor id">
	  	<br><br>
		<input type="text"  name="barcode" placeholder="barcode">
		<br><br>
		<input type="text"  name="img_path" placeholder="path">
		<br><br>
		<input type="text"  name="in_stock" placeholder="in stock">
		<br><br>
		<input type="text"  name="name" placeholder="name of the book">
		<br><br>
		<input type="text"  name="language_id" placeholder="lang id">
		
		
		</center>

<button name="go" type="submit" class="btn btn-success"> <i class="fa fa-paper-plane" aria-hidden="true"></i> حفظ</button>

{!! Form::close() !!} 

<br><br><br><br>


{!! Form::open(['url' => 'storeissue' , 'method' => 'POST']) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">


		<center>
      	<input type="text"  name="creator_name" placeholder="name of emp who created it">
	  	<br><br>
		<input id="date" type="date" name="done_at">
		<br><br>
		<input type="text"  name="file_path" placeholder="file path">
		<br><br>
		<input type="text"  name="title" placeholder="title">
		
		</center>

<button name="go" type="submit" class="btn btn-success"> <i class="fa fa-paper-plane" aria-hidden="true"></i> حفظ</button>

{!! Form::close() !!} 

</body>
      
    
    
</html>