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
    <link rel="stylesheet" type="text/css" href="home.css" media="screen" />
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="index.js" media="screen">

   <script src="jquery.js" type="text/javascript"></script>
   <script src="css/bootstrap.js" type="text/javascript"></script>


</head>
<body>

<nav class="navbar" >
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
             <li><a href="home.php">About</a></li>
             <li><a href="home.html">Gallery</a></li>
             <li><a href="addpost.php">Contact</a></li>
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
      <h4> <b>Welcome <?php echo $firstname ." " .$lastname   ?>.</b></br></br>This is your fiirst post. Edit or delete and start writng an posting. 
      Have fun with it....  </h4></br>
    
      <div class="line"></div>

<div class="wrap">
       <?php foreach($posts as $posts)  : ?>     
      
      <div class="start">
        <h2><?php echo $posts['title']; ?></h2></br>
        <small>Created on <?php echo $posts['created_at']; ?>
      by <?php echo $posts['author']; ?></small></br></br>
      <p> <?php echo $posts['body']; ?></p>
      <a class="btn btn-info" href="post1.php?id=<?php echo $posts['id']; ?>">Read More <img src="images/Mozilla.ico" width=30px;
    height=30px;/></a>
      </div>

     <?php endforeach; ?> 
</div>
     
  <div class="line"></div>

  <a class="btn btn-success btn-block" href="addpost.php">Add New Post <img src="images/Mozilla.ico" width=30px;
    height=30px;/></a>
    
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
<a href="">Your Comments on Hello World!</a>

<div class="line"></div>

<h4> ARCHIVES</h4>
<ul><li><a href="#">July 2019</a></li></ul>

<div class="line"></div>

<h4> CATEGORIES</h4>
<ul><li><a href="#">Uncategorized</a></li></ul>

<div class="line"></div>

<h4> META</h4>
<ul style=" color: rgb(42, 45, 187);text-align: left;">
  <li style="color:blue; text-align: left;"><a href="#">Log in</a></li>
  <li><a href="#">Entries</a></li>
  <li><a href="#">Comments</a></li>
  <li><a href="#">Remy Portfolio.com</a></li>
</ul>


<h4> ARCHIVES</h4>
<ul><li><a href="#">July 2019</a></li></ul>

<div class="line"></div>

<h4> CATEGORIES</h4>
<ul><li><a href="#">Uncategorized</a></li></ul>

<div class="line"></div>

<h4> META</h4>
<ul style=" color: rgb(42, 45, 187);text-align: left;">
  <li style="color:blue; text-align: left;"><a href="#">Log in</a></li>
  <li><a href="#">Entries</a></li>
  <li><a href="#">Comments</a></li>
  <li><a href="#">Remy Portfolio.com</a></li>
</ul>

</div>

<div class="line"></div>

<form class="form-group">
              <input type="text" name="user" placeholder="Search...."  class="form-control" onkeyup="show(this.value)">
          </form>

<div class="line"></div>

<div class="wrap2">

<h4> RECENT POSTS</h4>
<p><ul><li><a href="#">Hello World!</a></li></ul></p>
<p><ul><li><a href="#">Hello World!</a></li></ul></p>
<p><ul><li><a href="#">Hello World!</a></li></ul></p>
<p><ul><li><a href="#">Hello World!</a></li></ul></p>

<div class="line"></div>

</div>
       </div>
    </div> 
  </div>
</div>


  <div class="footer" style=" background-color:rgba(80, 80, 194, 0.116);
    font-size: 16px; font-family:forte;text-align:margin:0%; center;padding:10px;
    color: rgb(42, 122, 187);bottom: 0%;">&copy; 2019 PHP Session Login Form. All rights reserved | Design by
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