<?php 

require('config/db.php');



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wesley Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css" media="screen">
    <link rel="stylesheet" type="text/css" href="home.css" media="screen">
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="index.js" media="screen">

   <script src="jquery.js" type="text/javascript"></script>
   <script src="css/bootstrap.js" type="text/javascript"></script>


</head>
<body>

<nav class="navbar">
      <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
         <a class="navbar-brand" href="#">The Wesley Blog</a>
       </div>
       <div>
         <div class="collapse navbar-collapse" id="myNavbar">
           <ul class="nav navbar-nav navbar-right">
             <li><a href="home.php">Home</a></li>
             <li><a href="#">About</a></li>
             <li><a href="#">Gallery</a></li>
             <li><a href="#">Contact</a></li>
       </ul>
         </div>
       </div>
     </div>
   </nav>

  

   <div class="container">
       <div class="row">

  <div class="col-sm-3"></div>

         <div class="col-md-6">


           <div class="login-div">

   <center><h1><img src="images/Mozilla.ico" width=100px;
    height=100px;/></a></h1></center>

       <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
       <div class="form-group">

           <p>
             <input type="text" name="firstname" class="form-control" required ="required" placeholder="Firstname...."></p>
            <p>
              <input type="text" name="lastname" class="form-control" required ="required" placeholder="Lastname....."></p>


                <textarea class="form-control" name="comment" rows="15">
          Type comment here.... </textarea></br>
</div>
    <button type="submit" name="submit" class="btn btn-lg btn-block" >Post </button>
           </form>

          </div>
</br>

         </div>
         <div class="col-sm-3"></div>

         </div>
      </div>

     
 
       </div>
    </div> 
  </div>
</div>


  



          <script>
    $(document).ready(function(){
        $("#flip").click(function(){
            $("#panel").slideToggle("slow");
        });
    });
    </script>

   <script>
$(document).ready(function(){
// Add scrollspy to <body>
$('body').scrollspy({target: ".navbar", offset: 50});

// Add smooth scrolling on all links inside the navbar
$("#myNavbar a").on('click', function(event) {

  // Prevent default anchor click behavior
  event.preventDefault();

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 800, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
  });
});
});
</script>
<!-- here stars scrolling icon -->


</body>
</html>