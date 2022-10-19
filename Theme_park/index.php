<!DOCTYPE html>
<html>
<head>
<title>Themepark Magement</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="event.php">Events</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link enabled" href="specialization.php">Specialization</a>
      </li>

      <li class="nav-item">
        <a class="nav-link enabled" href="ticket.php">Book A Ticket</a>
      </li>

      <li class="nav-item">
        <a class="nav-link enabled" href="reachout.php">Way To Reach Us</a>
      </li>
    </ul>
  </nav>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-300" src="img/1.jpeg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-300" src="img/2.jpeg" alt="Newyork">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-300" src="img/3.jpeg" alt="mumbai">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-300" src="img/4.jpeg" alt="mumbai">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-300" src="img/5.jpeg" alt="mumbai">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="my-5">
<div class="py-5">
<h3 class="text-center">ABOUT US</h3>
</div>

<div  class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">
<h2>THEME WORLDINDIA</h2>
<h4>Theme WorldIndia  is one of the classical attractions that is known to be among the well-known and biggest amusement parks in the world. The incredible rides like The oldest, and The panorama are just a few of the numerous surprises that must not be missed when you enter into the most sought theme parks in all of India. Other than this, Themeland also offers entertainment complexes, musical tour of world attractions, roller coaster rides, shopping, and much more. No doubt, it is considered to be one of the world’s best amusement parks and is among the popular places to visit not only for kids but also for Adults<br>
<br>Location: Global Pagoda Road, Gorai Island, Borivali West.
<br>Entry Fee: Tickets start at 500 for the Childrens and 700 for Adults
<br>Timings: 10 AM to 11 PM.
</h4>

<a href="ticket.php" class="btn btn-success"> CLICK HERE TO BOOK TICKETS</a>

</div>
</div>
</div>
<section>
<section class="my-5">
<div class ="py-5">
<h2 class="text-center">Our Feedbacks</h2>
<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-rg-4">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</section> 

<section class="my-5">
  <div class="my-5">
    <h2 class="text-center"></h2>

    <?php
    include("connection.php");

    $sql = "select image,placename,placedescription from feedback";
    $query = $conn->prepare($sql);
    $query->execute();
    $query->store_result();
    $result = $query->num_rows;
    $query->bind_result($image_name,$place_name,$place_description);

    if($result>0)
    {
        while($query->fetch())
        {
?>   
        <div class="sub_team col-lg-4 col-md-4 col-12">
            <div class="card" >
                <img class="card-img-top" src="<?php echo $image_name;?>" alt="Card image">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $place_name;?></h5>
                    <p class="card-text"><?php echo $place_description;?></p>
                </div>
            </div>
        </div>
<?php } } ?>

<!-- <div class="col-lg-4 col-md-4 col-12" style="width:400px;float:left;">
<div class="card">
  <img class="card-img-top" src="<?php echo $image_name;?>" alt="Card image">
  <div class="card-body">
  <h4 class="card-title"><?php echo $place_name;?></h4>
  <p class="card-text"><?php echo $place_description;?></p>
  </div>
</div>
</div> -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="feedback.php" class="btn btn-primary">Add your Feedback</a>
  </div>
</section>

  
 </section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
