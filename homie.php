<?php 

require('config/db.php');


  session_start();

   $firstname = $_SESSION['firstname'];
   $lastname = $_SESSION['lastname'];
   $email = $_SESSION['email'];

    
   // create Query
      $query = 'SELECT * FROM posts';

      //get result
      $result = mysqli_query($conn, $query);

      #fetch data
      $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

      //FREE RESULT
      mysqli_free_result($result);

      //close connection
      mysqli_close($conn);
    



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wesley Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="decor.css" media="screen" />
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="index.js" media="screen">

   <script src="jquery.js" type="text/javascript"></script>
   <script src="css/bootstrap.js" type="text/javascript"></script>

</head>
<body>

<nav class="navbar navbar-inverse bg-info" data-spy="affix" data-offset-top="197">
      <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
         <a class="navbar-brand" href="#">Portfolio</a>
       </div>
       <div>
         <div class="collapse navbar-collapse" id="myNavbar">
           <ul class="nav navbar-nav">
             <li><a href="#sect1">Home</a></li>
             <li><a href="#sect2">About</a></li>
             <li><a href="#sect3">Skills</a></li>
              <li><a href="#sect6">Projects</a></li>
             <li><a href="#sect5">Contact</a></li>
       </ul>
         </div>
       </div>
     </div>
   </nav>


<div class="container">
    <div class="row">
      <div class="col-md-8">
      <div class="jumbotron"> 
        <h1>Hello World!</h1>
      <h4> <p>Welcome <?php echo $firstname ." " .$lastname   ?>.</p>This is your fiirst post. Edit or delete and start writng an posting. 
      Have fun with it....  </h4></br>
    
      <div class="line"></div>

<div class="sect">
       <?php foreach($posts as $posts)  : ?>     
      
      <div class="start">
        
      </div>

     <?php endforeach; ?> 
</div>
     
  <div class="line"></div>

<div class="wrap"></div>

  <div class="line"></div>

<div class="wrap"></div>


  <div class="line"></div>

<div class="wrap"></div>

  <div class="line"></div>

<div class="wrap"></div>

  <div class="line"></div>

     
    
   
        </div>

      </div>
    
      <div class="col-md-4">
      <div class="jumbotron"> 

 <div class="line"></div>

      <form class="form-group">
                    <input type="text" name="user" placeholder="Search...."  class="form-control" onkeyup="show(this.value)">
                </form>

<div class="line"></div>

<div class="wrap2">

<h4> RECENT POSTS</h4>
<ul><li><a href="#">Hello World!</a></li></ul>

<div class="line"></div>

<h4> RECENT COMMENTS</h4>
<ul><li><a href="#">Your Comments on Hello World!</a></li></ul>

<div class="line"></div>

<h4> ARCHIVES</h4>
<ul><li><a href="#">July 2019</a></li></ul>

<div class="line"></div>

<h4> CATEGORIES</h4>
<ul><li><a href="#">Uncategorized</a></li></ul>

<div class="line"></div>

<h4> META</h4>
<ul>
  <li ><a href="#">Log in</a></li>
  <li><a href="#">Entries</a></li>
  <li><a href="#">Comments</a></li>
  <li><a href="#">Remy Portfolio.com</a></li>
</ul>

</div>
<div class="line"></div>
       </div>
    </div> 
  </div>
</div>


  <div class="footer">&copy; 2019 PHP Session Login Form. All rights reserved | Design by
	<a href="http://Remy.com">Remy</a>
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