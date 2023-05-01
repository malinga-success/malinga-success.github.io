<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Mathematics Form 1</title>
    <link rel="stylesheet" href="css/style-math.css">
</head>
<body>
    <div class="black-fill"> </br> </br>
        <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="homeNav">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">chikwawa News</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            services
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#advertisement">advertisement</a></li>
            <li><a class="dropdown-item" href="#recent-news">recent news</a></li>
            <li><a class="dropdown-item" href="#about">About Us</a></li>
            <li><a class="dropdown-item" href="#contact">Contact Us</a></li>
            <li><hr class="dropdown-divider"></li>
        </ul>
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            secondary school
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="mathematics1.php">Mathematics</a></li>
            <li><a class="dropdown-item" href="#recent-news">Physics</a></li>
            <li><a class="dropdown-item" href="#about">Chemistry</a></li>
            <li><a class="dropdown-item" href="#contact">Contact Us</a></li>
            <li><hr class="dropdown-divider"></li>
        </ul>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Leisure
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#advertisement">Tourism</a></li>
            <li><a class="dropdown-item" href="#recent-news">Sports</a></li>
            <li><a class="dropdown-item" href="#about">Tradition</a></li>
            <li><a class="dropdown-item" href="#contact">Contact Us</a></li>
            <li><hr class="dropdown-divider"></li>
        </ul>

    </div>
  </div>
  </div>
 </nav>




    <div class="container">
        <div class="heading">Mathematics</div>
    </div>
    <div class="video-container">
        <div class="card">
        <div class="video">
            <video src="vdz/1.mp4"autoplay loop  muted></video>
        </div>
        <div class="video-content">
                <h1>Hello</h1>
                <p>January 7, 2023. 12:00am</p>
            </div>
        </div>
        <div class="video">
            <video src="vdz/2.mp4" autoplay loop muted></video>
        </div>

        <div class="video">
            <video src="vdz/3.mp4" autoplay loop muted></video>
        </div>

        <div class="video">
            <video src="vdz/4.mp4" autoplay loop muted></video>
        </div>

        <div class="video">
            <video src="vdz/5.mp4" autoplay loop muted></video>
        </div>

        <div class="video">
            <video src="vdz/6.mp4" autoplay loop muted></video>
        </div>

        <div class="video">
            <video src="vdz/7.mp4" autoplay loop muted></video>
        </div>
    </div>

    <script>
        var video = document.querySelectorAll('video')

        video.forEach(play => play.addEventListener('click',() =>{

            play.classList.toggle('active');

            if(play.paused){
                play.play();
            }
            else{
                play.pause();
                play.currentTime = 0;
            }

        }));

    </script>

<div class="card" id="contact">
    <h1>Contact Us</h1>
<form action="about.php" method="POST">
<div class="mb-3">
<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected>sex</option>
  <option value="1">male</option>
  <option value="2">female</option>
</select>
  <label for="exampleFormControlInput1" class="form-label">Username</label>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="write your message here"></textarea>
</div>
<button type="submit" class="btn btn-success" >submit</button>
</form>

<div class="text-center text-dark">
    copyright &copy; 2023 success news. All Rights Reserved.
</div>
</div>

</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
 







