<?php 

  session_start();

   $firstname = $_SESSION['firstname'];
   $lastname = $_SESSION['lastname'];
   $email = $_SESSION['email'];


?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <title>The Login Page</title>
     <link rel="stylesheet" href="css/bootstrap.css" media="screen">
     <link rel="stylesheet" href="stylez.css" media="screen" >

   </head>
   <body class="bod">
     <h1>Welcome </h1>

     <div class="container">
       <div class="row">

  <div class="col-sm-3"></div>

         <div class="col-md-6">
         
      <h3>Welcome <?php echo $firstname ." " .$lastname   ?><br><HR>
          You are currently logged In</h3>
<form method="POST" action="home.php">
    <center><button type="submit" name="logout" class="btn btn-success btn-lg btn-block" >Click Here To Start </button></center>
</form>
          </div>

         <div class="col-sm-3"></div>

         </div>
      </div>



      <div class="footer">&copy; 2019 Simple PHP Login Form. All rights reserved | Design by
      			<a href="http://Remy.com">Remy</a>
      		</div>



   </body>
</html>
