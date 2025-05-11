<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Quiz11</title>

  <!-- Styles -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

  <style type="text/css">
  .step-container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px;
  padding: 40px;
}

.step-card {
  width: 300px;
  background-color: #f7f24a;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  transition: transform 0.3s;
}

.step-card:hover {
  transform: translateY(-5px);
}

.step-card img {
  width: 100%;
  height: 200px;
  object-fit: fill;
}

.step-content {
  padding: 20px;
  text-align: center;
}

.step-label {
  background: white;
  border-radius: 20px;
  display: inline-block;
  padding: 4px 16px;
  font-weight: bold;
  margin-bottom: 10px;
}

.step-content h3 {
  margin: 10px 0 5px;
  font-size: 20px;
  color: #333;
}

.step-content p {
  font-size: 14px;
  color: #555;
}

  .hero {
      padding: 100px 0;
      position: relative;
      text-align: left;
    }
    .hero h1 {
      font-weight: 700;
      font-size: 3rem;
    }
    .hero p {
      font-size: 1.1rem;
      color: #ddd;
    }
    .hero .btn-warning {
      font-weight: bold;
    }
    .hero-img {
      position: absolute;
      right: 5%;
      top: 50%;
      transform: translateY(-50%);
      max-width: 300px;
      opacity: 0.4;
    }
    .card-section {
      background: white;
      border-radius: 25px;
      padding: 30px;
      margin-top: -50px;
      box-shadow: 0 10px 40px rgba(0,0,0,0.15);
    }
    .feature-card {
      border: 2px solid #eee;
      border-radius: 20px;
      padding: 20px;
      text-align: center;
      transition: 0.3s ease;
    }
    .feature-card:hover {
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
      transform: translateY(-5px);
    }
    .feature-card h5 {
      font-weight: 600;
      margin-top: 15px;
      color: #333;
    }
    .feature-card small {
      color: #666;
    }

    .card-overlay {
      position: relative;
      border-radius: 15px;
      overflow: hidden;
      height: 100%;
    }
    .card-overlay img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: brightness(70%);
    }
    .card-content {
      position: absolute;
      top: 0;
      left: 0;
      padding: 20px;
      color: white;
      height: 100%;
      width: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .card-content h5 {
      font-weight: 700;
      font-size: 1.25rem;
    }
    .card-content p {
      margin: 0;
      font-size: 0.95rem;
    }
    .arrow {
      font-size: 1.2rem;
      text-align: right;
    }

    .podium-wrapper {
      text-align: center;
      padding: 50px 15px;
      background: linear-gradient(180deg, #fff, #f9f9ff);
    }

    .podium {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: flex-end;
      gap: 30px;
      margin-top: 50px;
    }

    .podium-column {
      background: linear-gradient(to top, #cfd9ff, #e8ecff);
      border-radius: 10px;
      width: 80px;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      color: #3757e4;
      font-weight: bold;
      font-size: 2rem;
    }

    .podium-1 {
      height: 180px;
      z-index: 3;
    }

    .podium-2 {
      height: 140px;
      z-index: 2;
    }

    .podium-3 {
      height: 120px;
      z-index: 1;
    }

    .winner-img {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      border: 4px solid white;
      object-fit: cover;
      position: absolute;
      top: -40px;
    }

    .winner-1 {
      left: 50%;
      transform: translateX(-50%);
    }

    .winner-2 {
      right: -10px;
    }

    .winner-3 {
      left: -10px;
    }

    .learn-btn {
      margin-top: 40px;
      background-color: #9063f9;
      color: white;
      padding: 12px 28px;
      border-radius: 50px;
      font-weight: 600;
      text-transform: uppercase;
    }

    .learn-btn:hover {
      background-color: #7a4ce3;
    }

    .mosaic-container {
      padding: 60px 20px;
      background-color: #fff;
      text-align: center;
    }

    .mosaic-title {
      font-size: 2rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 10px;
    }

    .mosaic-desc {
      color: #6c757d;
      margin-bottom: 40px;
    }

    .mosaic-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 15px;
      justify-content: center;
      align-items: center;
    }

    .mosaic-item {
      border-radius: 15px;
      overflow: hidden;
      aspect-ratio: 3 / 4;
      background-size: cover;
      background-position: center;
    }

    .img-portrait {
      aspect-ratio: 3 / 4;
    }

    .bg-purple { background-color: #b29bfc; }
    .bg-yellow { background-color: #fce96a; }
    .bg-orange { background-color: #ffaa33; }
    .bg-lightblue { background-color: #a0e0ff; }

    @media (max-width: 768px) {
      .mosaic-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 576px) {
      .mosaic-grid {
        grid-template-columns: 1fr;
      }
    }

  </style>

</head>
<body>
  <!-- Introduction Section --> 
  <div style="background-color:seagreen;">
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent px-4">
  <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Quiz11 Logo" style="width:25%;"></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav me-3">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Trivia</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Option 1</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Quiz</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Option 2</a></li>
        </ul>
      </li>
      <li class="nav-item"><a class="nav-link" href="#">Leaderboard</a></li>
    </ul>
    <button class="btn btn-outline-light me-2">Login</button>
    <button class="btn btn-primary">Registration</button>
  </div>
</nav>

<!-- Hero Section -->
<div class="container hero">
  <div class="row align-items-center">
    <div class="col-md-6">
      <h1 style="color:white;">Daily Quiz, Daily Bonus - Play Today!</h1>
      <p>QuizQwik is the daily Trivia and quiz playing platform. It brings some exciting surprises every day.</p>
      <button class="btn btn-warning mt-3">🎯 PLAY TODAY</button>
    </div>
    <div class="col-md-6 text-end">
      <img src="images/trophy.png" alt="Trophy" class="hero-img">

    </div>
  </div>
</div>

<!-- Feature Cards -->
<div class="container card-section">
  <div class="row g-4">
    <div class="col-md-4">
      <div class="feature-card">
        <img src="images/daily_trivia.png" alt="Daily Trivia" width="60">
        <h5>Daily Trivia</h5>
        <small>Start Now →</small>
      </div>
    </div>
    <div class="col-md-4">
      <div class="feature-card" style="background-color:#d4b5ff;">
        <img src="images/daily_win.png" alt="Daily Win" width="60">
        <h5>Daily Play & Win</h5>
        <small>Start Now →</small>
      </div>
    </div>
    <div class="col-md-4">
      <div class="feature-card">
        <img src="images/play_like_king.png" alt="Play Like King" width="60">
        <h5>Play Like King</h5>
        <small>Start Now →</small>
      </div>
    </div>
  </div>
</div>
<br>
</div> 
    <section>
      <div class="container text-center my-5">
  <h2 class="fw-bold">Play, Learn and Earn bonus</h2>
  <p class="text-muted">Check yourself, Earn yourself!</p>

  <div class="row mt-4 g-4">
    <!-- Card 1 -->
    <div class="col-md-4">
      <div class="card-overlay">
        <img src="images/b1.png" alt="Test IQ"> <!-- Replace with real image -->
        <div class="card-content">
          <div>
            <h5>Test your IQ!</h5>
            <p>Start now</p>
          </div>
          <div class="arrow">→</div>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4">
      <div class="card-overlay">
        <img src="images/b2.png" alt="Learn and Earn"> <!-- Replace with real image -->
        <div class="card-content">
          <div>
            <h5>Learn & Earn</h5>
            <p>Start now</p>
          </div>
          <div class="arrow">→</div>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4">
      <div class="card-overlay">
        <img src="images/b3.png" alt="Test before play"> <!-- Replace with real image -->
        <div class="card-content">
          <div>
            <h5>Test before play</h5>
            <p>Start now</p>
          </div>
          <div class="arrow">→</div>
        </div>
      </div>
    </div>
  </div>
</div>

    </section>

    <!-- Quick Features Section -->
    <section>
      <div class="container podium-wrapper">
  <h2 class="fw-bold">QuizKwik Winners</h2>
  <p class="text-muted">
    Lorem ipsum dolor sit amet consectetur. Risus sem dolor et lorem libero purus at scelerisque cursus. Feugiat mauris integer facilisis eget nunc placerat semper orci quis.
  </p>

  <div class="podium">
    

    <img src="images/c1.png" class="img-fluid rounded-circle" alt="Winner 3" style="width:50%;"> <!-- Replace with actual image -->
  </div>

  
</div>
    </section>

    <!-- Detailed Features Section -->
    <section>
      <div class="container mosaic-container">
  <h2 class="mosaic-title">Be the top on the list</h2>
  <p class="mosaic-desc">
    Lorem ipsum dolor sit amet consectetur. Risus sem dolor et lorem libero purus at scelerisque cursus. Feugiat mauris integer facilisis eget nunc placerat semper orci quis.
  </p>

  <div>
    <img src="images/c2.png" class="img-fluid" alt="Winner 3" >
    <!-- Replace with actual image -->

  </div>
</div>
    </section>

    

    <!-- How it works Section -->
    <section>
      <div style="margin-left: 8%;margin-right: 8%;padding-left: 3%; padding-right: 3%;">
      <p><h1><b>Here's How It Works</b></h1></p>
      <p>There are many variations of passages of Lorem Ipsum available,<br>
           but the majority have suffered alteration in some form, by injected humour,<br>
           or randomised words which don't look even slightly believable.</p>


      <div class="step-container">
    <div class="step-card">
      <img src="images/how_it_works_1.jpeg" alt="Step 1">
      <div class="step-content">
        <p class="step-label">Step 1</p>
        <h3>Enter the game</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis orci ac.</p>
      </div>
    </div>
    <br>
    <div class="step-card">
      <img src="images/how_it_works_2.jpg" alt="Step 2">
      <div class="step-content">
        <p class="step-label">Step 2</p>
        <h3>Play the game</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis orci ac.</p>
      </div>
    </div>
    <br>
    <div class="step-card">
      <img src="images/how_it_works_3.jpg" alt="Step 3">
      <div class="step-content">
        <p class="step-label">Step 3</p>
        <h3>Earn coin</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis orci ac.</p>
      </div>
    </div>
  </div>

    </section>

    <!-- Progress and Success Section -->
    <section>
      <div style="margin-left: 8%;margin-right: 8%;padding-left: 3%; padding-right: 3%;text-align: center;">   
       <div class="row" >
         <div class="col-sm">
          <div class="row" style="margin-top:7%;margin-bottom:1%;"><h1><b>Progress and Success</b></h1></div> 
          <div class="row" style="margin-top:1%;margin-bottom:1%;text-align: left;">There are many variations of passages of Lorem Ipsum available,
           but the majority have suffered alteration in some form, by injected humour,
           or randomised words which don't look even slightly believable. If you are going to use a passage
           of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. If you are going to use a passage
           of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
           All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making
           this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined 
           with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. 
           The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-
         characteristic words etc.</div>


       </div>
       <div class="col-sm" style="align-items:center;align-content: center;">
        <div class="row" style="border: 2px solid #ebe6e6;border-radius: 20px;width: 65%; margin-left: 20%;margin-right: 20%;margin-top: 2%; padding-top: 2%;padding-bottom: 2%;align-items: center; ">
          <div class="col-sm">
            <i style="font-size:2rem; color: skyblue;" class="fa-solid fa-circle-question"></i>
          </div>
          <div class="col-sm">
            <b>100+</b> <br> Quizess
          </div>
        </div>
        <div class="row" style="border: 2px solid #ebe6e6;border-radius: 20px; width: 65%; margin-left: 20%;margin-right: 20%;margin-top: 2%; padding-top: 2%;padding-bottom: 2%;align-items: center;  ">
          <div class="col-sm">
            <i style="font-size:2rem; color:red;" class="fa-solid fa-chart-simple"></i>
          </div>
          <div class="col-sm">
            <b>300+</b> <br> Players
          </div>
        </div>
        <div class="row" style="border: 2px solid #ebe6e6;border-radius: 20px; width: 65%; margin-left: 20%;margin-right: 20%;margin-top: 2%; padding-top: 2%;padding-bottom: 2%;align-items: center;  ">
          <div class="col-sm">
            <i style="font-size:2rem; color:green;" class="fa-solid fa-arrow-up-right-dots"></i>
          </div>
          <div class="col-sm">
            <b>80%</b> <br> Engagement
          </div>
        </div>
        <div class="row" style="border: 2px solid #ebe6e6;border-radius: 20px; width: 65%; margin-left: 20%;margin-right: 20%;margin-top: 2%; padding-top: 2%;padding-bottom: 2%;align-items: center;  ">
          <div class="col-sm">
            <i style="font-size:2rem; color:purple;" class="fa-solid fa-trophy"></i>
          </div>
          <div class="col-sm">
            <b>60+</b> <br> Challenge Winners
          </div>
        </div>

      </div>
    </div>
  </div> 
</section>

<!-- Mobile App Section -->
<section>
  <div class="rounded" style="background-color:#d0d3d9;margin-left:5%;margin-right:5%;margin-top:1%;margin-bottom:1%;padding-left:2%;padding-right:2%;padding-top:2%;">
    <div class="row">
      <div class="col-sm" style="text-align:center;padding-top:10%;">
        <div class="row" style="margin-top:1%;margin-bottom:1%;"><h1><b>Our Mobile App</b></h1></div> 
        <div class="row" style="margin-top:1%;margin-bottom:1%;"><h2>Download Now From Google Play<br> Store or Apple App Store</h2></div>
        <img src="images/mobile_app_1_2.png" alt="Quiz11 Logo" style="width:40%;">

      </div>
      <div class="col-sm" style="text-align:center;">
        <img src="images/mobile_app_3.png" alt="Quiz11 Logo" style="width:70%;">
      </div>
    </div>
  </div>
</section>

<!-- Footer Section -->
<section>
  <div style="background-color:black;color:white;padding-left:5%;padding-right:5%;padding-top:3%;padding-bottom:3%;">
    <div class="row">
      <div class="col-sm">
        <p><img src="images/logo.png" alt="Quiz11 Logo" style="width:25%;"></p>
        Improve your skills anytime<br>
        anywhere. Start your happy journey<br>
        with practice club
      </div>
      <div class="col-sm">
        <p><b>Important Menu</b></p>
        What is Quiz11?<br>
        Privacy Policy<br>
        Refund Menu<br>
      </div>
      <div class="col-sm">
        <p><b>Important Menu</b></p>
        What is Quiz11?<br>
        Privacy Policy<br>
        Refund Menu 
      </div>
      <div class="col-sm">
        <p><b>Important Menu</b></p>
        What is Quiz11?<br>
        Privacy Policy<br>
        Refund Menu
      </div>
      <div class="col-sm">
        <p><b>Follow Us</b></p>
        <div class="row" style="width:50%;">
          <div class="col-3">
            <i style="font-size:1.3rem;" class="fa-brands fa-facebook"></i>
          </div>
          <div class="col-3">
            <i style="font-size:1.3rem;" class="fa-brands fa-instagram"></i>
          </div>
          <div class="col-3">
            <i style="font-size:1.3rem;" class="fa-brands fa-youtube"></i>
          </div>
          <div class="col-3">
            <i style="font-size:1.3rem;" class="fa-brands fa-twitter"></i>
          </div>
        </div>




      </div>
    </div>
    <hr>
    <div class="row" style="padding-left:1%;padding-right:1%;padding-top:1%;padding-bottom:1%;">
      <div class="col-sm">
        @2025 - Quiz11 - Y S Web Solutions
      </div>
      <div class="col-sm" style="text-align:right;">
        Terms .  Privacy .  Sitemap
      </div>
    </div>
  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
