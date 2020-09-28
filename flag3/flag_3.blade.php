<!DOCTYPE html>
<html>
 <head>
  <title>Palantír</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/973cebd43f.js" crossorigin="anonymous"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }

   body
   {
	    margin: 0;
	    padding: 0;
	    font-family: sans-serif;
	    background: url(/ctf2/back3.jpg) no-repeat;
    	background-size: cover;

  }

  .avatar
{

	width:120px;
	height:120px;
	float:right;
	margin-top:-40px;
	margin-right:-55px;

}
  </style>
 </head>
 <body>
  <br />

<div class="container box" style="background-color:#d9d9d9; margin-left: 140px; margin-top:190px;">
    <img src ="/ctf2/a.png" class = "avatar">
   <h3 align="center">Palantír Portal</h3><br />


   @if(isset(Auth::user()->email))
    <script>window.location="flag3/success";</script>
   @endif

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if ($message = Session::get('ServerError'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif

   <form method="post" action="{{ url('/flag3/checklogin') }}">
  {{ csrf_field() }}
    <div class="form-group">
     <i class="fas fa-user" ></i>
     <label>Enter Email</label>
     <input placeholder="example@lorienmail.me" type="email" name="email" class="form-control" />
    </div>
    <div class="form-group">
     <i class="fas fa-lock" color = "black"></i>
     <label>Enter Password</label>
     <input placeholder="password" type="password" name="password" class="form-control" />

     <!--<input placeholder=" " type="hidden" name="https://github.com/EdwardTeach98/WizardsSecretDictionary" />  -->

    </div>
    <div class="form-group">
     <input type="submit" name="login" class="btn btn-primary" value="Login" />
    </div>
   </form>
  </div>
 </body>
</html>
