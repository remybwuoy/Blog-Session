<?php
 if (isset($_POST['login'])) {

  //with sessions, data is stored on the server but with cookies, data is stored in the browser
   session_start(); #session

   $_SESSION['email']= htmlentities($_POST['email']);

   $_SESSION['password']= htmlentities($_POST['password']);


   header('Location: logout.php');//redirect

 }

 ?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <title>The Login Page</title>
     <link rel="stylesheet" href="css/bootstrap.css" media="screen">
     <link rel="stylesheet" href="stylez.css" media="screen" >

   </head>
   <body>



     <div class="container">
       <div class="row">

  <div class="col-sm-3"></div>

         <div class="col-md-6">


           <div class="login-div">

   <center><h1># Login into your account #</h1></center>

       <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

           <p>
             <input type="email" name="email" class="form-control" required ="required" placeholder="Email...."></p>
            <p>
              <input type="password" name="password" class="form-control" required ="required" placeholder="Password....."></p>

    <center><button type="submit" name="login" class="btn btn-lg btn-block" >Log In </button></center>
           </form>

          </div>
</br>

   <div class="sign">
              <center> <a href="Register.php">Don't Have an Account?</a></center>
      </div>

         </div>
         <div class="col-sm-3"></div>

         </div>
      </div>


      <div class="footer">&copy; 2019 PHP Session Login Form. All rights reserved | Design by
      			<a href="http://Remy.com">Remy</a>
      		</div>


   </body>
</html>
