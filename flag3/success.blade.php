<!DOCTYPE html>
<html>
 <head>
  <title>flag3</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
  </style>
 </head>
 <body>
  <br />
  <div class="container box" style="background-color:#d9d9d9; margin-left: 140px; margin-top:190px;">
   <h3 align="center">Palantír Portal</h3><br />

  <script>
  function flag4()
  {
    document.getElementById("f4").innerHTML = "oneCTF{5eabe85ec9ba2ac17a0f65f4dcac2dc9}";
  }
  </script>

   @if(isset(Auth::user()->email))
    <div class="alert alert-danger success-block">
      <p style="text-align:center;">
     <strong>Welcome mighty wizard {{ Auth::user()->name }}</strong>
      </p>
     <br/>
    <div style="margin-top:20px; margin-bottom:20px;text-align:center;" >
    <button type="button" style="margin-left: 10px;padding: 7px 35px; "class="btn btn-success" onclick="flag4()">Flag-3</button>
    <a href="{{ url('flag3/logout') }}"><button type="button" class="btn btn-danger" style=" margin-left: 10px; padding:7px 35px;" >Logout</button></a>


   </div>
    </div>
    <b><p  style="margin-top:20px;text-align:center;" id="f4"></p></b>
   @else
    <script>window.location = "../";</script>
   @endif

   <br />
  </div>
 </body>
</html>
