<?php
     //message vars
     $msg = '';
     $msgClass ='';

 //Check for submit
  if(filter_has_var(INPUT_POST, 'submit')){
    
    $firstname =  htmlspecialchars($_POST['firstname']);
  $lastname =  htmlspecialchars($_POST['lastname']);
  $email =  htmlspecialchars($_POST['email']);
  $password = $_POST['password'];

//check if fields are filled
  if(!empty($email) && !empty($firstname) && !empty($lastname)  && !empty($password)){
  //email check
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
    $msg ='Please Enter Valid Email!';
    $msgClass = 'alert alert-danger fade in';

  }else{
    $msg ='Submitted Successfully!';
    $msgClass = 'alert alert-success fade in';
     }
  }else{
          $msg ='Please fill in all fields!';
          $msgClass = 'alert alert-danger fade in';
       }

  }

?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <title>Trials</title>
     <link rel="stylesheet" href="css/bootstrap.css" media="screen">
     <link rel="stylesheet" href="stylez.css" media="screen" >

<style>
.alert-success{
  text-align:center;
  font-size:16px;
 padding:10px;
 color:#fff;
 background-color:rgba(55, 197, 55, 0.945);
 margin:50px;
 padding:7px;
 border:none;
 font-family: 'Courier New', Courier, monospace;

}
.alert-danger{
  text-align:center;
  font-size:16px;
 padding:10px;
 color:#fff;
 background-color:rgba(231, 78, 78, 0.945);
 margin:50px;
 padding:8px;
 border:none;
 font-family: 'Courier New', Courier, monospace;

}

</style>

   </head>
   <body>

     <div class="container">
       <div class="row">

  <div class="col-sm-3"></div>

         <div class="col-md-6">

           <div class="login-div">
          
           <?php if($msg!= ''): ?>

<div class ="alert <?php echo $msgClass;?>"><?php echo $msg;?></div>
<?php endif;?>

       <form role="form" action= "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

         <p>
             <input type="name" name="firstname" class="form-control" required="required" value="<?php echo isset($_POST['firstname']) ? $firstname : ''; ?>" placeholder="Firstname...."></p>

             <p>
             <input type="name" name="lastname" class="form-control" required="required" value="<?php echo isset($_POST['lastname']) ? $lastname : ''; ?>" placeholder="Lastname...."></p>

           <p>
             <input type="email" name="email" class="form-control" required="required" value=""  placeholder="Email...."></p>

            <p>
              <input type="password" name="password" class="form-control" value="" placeholder="Password....."></p>

           <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" >Submit </button>
           </form>

          </div>

         </div>
         <div class="col-sm-3"></div>

         </div>
      </div>

   </body>
</html>
