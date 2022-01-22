<?php 

require('config/db.php');


  session_start();

   $firstname = $_SESSION['firstname'];
   $lastname = $_SESSION['lastname'];
   $email = $_SESSION['email'];
    
//get id
$id = mysqli_real_escape_string($conn, $_GET['id']);

   // create Query
      $query = 'SELECT * FROM posts WHERE id= ' .$id; 

      //get result
      $result = mysqli_query($conn, $query);

      #fetch data
      $posts = mysqli_fetch_assoc($result);

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
      <div class="col-md-8">
      <div class="jumbotron"> 
    

      
      <div class="start">
        <h2><?php echo $posts['title']; ?></h2></br>
        <small>Created on <?php echo $posts['created_at']; ?>
      by <?php echo $posts['author']; ?></small></br></br>
      <p> <?php echo $posts['body']; ?></p></br>
      <a class="btn btn-danger" href="home.php?id=<?php echo $posts['id']; ?>"> Back <img src="images/exit.png" width=40px;
    height=40px;/></a>

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