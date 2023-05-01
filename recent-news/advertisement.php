<?php

if($_POST){
   $name = $_POST['name'];
   $comment = $_POST['comment'];
   $handle = fopen("comments.php", "a");
   fwrite($handle, "<b><i>" . $name . "<b /><i> said:<br />" . $comment . "<br /><br />") ;
   fclose($handle);
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Students not happy with the situation</title>
    <link rel="stylesheet" href="recent-news/style.css">
</head>
<body class="body-home">
    <div class="black-fill"> </br> </br>
        <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="homeNav">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Success</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            services
          </a>
          <ul class="dropdown-menu">

            <li><a class="dropdown-item" href="#">About Us</a></li>
            <li><a class="dropdown-item" href="#">Contact Us</a></li>
            <li><hr class="dropdown-divider"></li>
      </ul>
      <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      <ul class="navbar-nav me-right mb-2 mb-lg-0">
        <li class="nav-item" >
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>

    </div>
  </div>
  </div>
 </nav>


<body class="body-home">
<div class="card mb-3">
  <img src="img/1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
  </div>

</br>
<h2>Write your comment</h2>
</br>
  <form method="POST" id="comment_form">
    <div class="form-group">
        <input type="text" name="name" id="name" class="form-control" placeholder="enter name">
    </div>

    <div class="form-group">
        <textarea name="comment" id="comment" class="form-control" rows="4" placeholder="enter comment"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" id="submit" class="btn btn-info" value="submit">
    </div>
  </form>
  </div>
</div>
    
<hr>
    
    <h1>other comments<h1>
    <?php
        include "comments.php";
    ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>