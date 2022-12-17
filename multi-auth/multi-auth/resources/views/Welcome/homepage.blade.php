<html>
  <head>
    <title>Welcome</title>
    <link rel="stylesheet" href="animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
      input[type=button], input[type=submit], input[type=reset] {
        /*background-color: #808080;*/
        background-color: rgba(0,0,0,0);
        border: 2px solid #ffffff;
        border-radius: 5px;
        font-size: 24px;
        color: white;
        padding: 12px 48px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
      }
      input:hover {
        background-color: #e7e7e7;
        color: #4d4d4d;
        border: 2px solid rgba(0,0,0,0);
      }
      input:active {
        background-color: #e7e7e7;
        color: #4d4d4d;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        transform: translateY(4px);
      }
      body{
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        box-sizing: border-box;
        animation: fadeIN 1s;
      }

      h2{
        text-align: center;
      }
      h3{
        margin-top: 10px;
      }
      .banner{
        width: 100%;
        height: 85vh;
        background-image: linear-gradient(rgba(0,0,0,0.25),#4d4d4d),url('/images/south.jpg');
        background-position: center;
        background-size: cover;
        animation: animate 16s ease-in-out infinite;
      }

      /*.outer{
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100vh;
        background: rgba(0, 0, 0, 0.5);
      }*/

      .details{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
      }

      .details h1{
        font-size: 4em;
        color: #fff;
      }

      hr{
        border: 1px solid black;
      }
      
      .button {
        display: inline-block;
        border-radius: 4px;
        background-color: #00bfff;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 20px;
        padding: 10px;
        width: 150px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }

      .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }

      .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }

      .button:hover span {
        padding-right: 25px;
      }

      .button:hover span:after {
        opacity: 1;
        right: 0;
      }
      @keyframes fadeIN{
        0%{
          opacity: 50%;
        }
        100%{
          opacity: 100%;
        transition: opacity 1s;
        }
      }
      

      @keyframes fadeInDown {
        0% {
            opacity: 0;
            transform: translateY(-20px);
          }
        100% {
            opacity: 1;
            transform: translateY(0);
          }
      }
      
      /*.animate__fadeIn{
        animation: fadeIn 3s;
      }*/

      /*@keyframes animate{
        0%,100%{
          background-image: url(./images/กระบี่.jpg);
        }
        25%{
          background-image: url(./images/พังงา.jpg);
        }
        50%{
          background-image: url(./images/ภูเก็ต.jpg);
        }
        75%{
          background-image: url(./images/ระนอง.jpg);
        }
        
      }
      /*@keyframes fadeIn{
        0%{
          opacity: 0;
          
        }
        100%{
          opacity: 1;
          
        }
      }
      
      .animate__fadeIn{
        animation: fadeIn 3s;
      }*/

      .fadeInDown {
          animation: fadeInDown 2s;
        }

    </style>
  </head>

  <body>
    <div class="banner">
      <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Fantail</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                
              </li>    
            </ul>
          </div>
        </div>
      </nav>
      <div class="outer">
        <div class="details">
          <div class="fadeInDown">
            <h1>Welcome To Fantail</h1>
            <input type="submit" value="Login">           
          </div>
        </div>
      </div>
    </div>
    
    <div class="container-fluid mt-5 text-center">
      <h2>Recommended</h2>
      <hr>
      <div class="row mt-5">
        <div class="col-sm-4">
          <img src="/images/krabi.jpg" class="img-fluid mx-auto d-block rounded" alt="krabi" >
          <h3>Krabi</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          <button class="button" style="vertical-align:middle"><span>Learn more </span></button>

        </div>
        <div class="col-sm-4">
          <img src="/images/phuket.jpg" class="img-fluid mx-auto d-block rounded" alt="krabi" >
          <h3>Phuket</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          <button class="button" style="vertical-align:middle"><span>Learn more </span></button>
        </div>
        <div class="col-sm-4">
          <img src="/images/ranong.jpg" class="img-fluid mx-auto d-block rounded" alt="krabi" >
          <h3>Ranong</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          <button class="button" style="vertical-align:middle"><span>Learn more </span></button>
        </div>
      </div>
    </div>

    <!-- Carousel -->
    <div id="demo" class="carousel slide mt-5" data-bs-ride="carousel">
      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>
  
      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/images/phuket.jpg" alt="Phuket" class="d-block" style="width:100%">
          <div class="carousel-caption">
            <h3>Phuket</h3>
            <p>We had such a great time in Phuket!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/images/krabi.jpg" alt="Krabi" class="d-block" style="width:100%">
          <div class="carousel-caption">
            <h3>Krabi</h3>
            <p>Thank you, Krabi!</p>
          </div> 
        </div>
        <div class="carousel-item">
          <img src="/images/ranong.jpg" alt="Ranong" class="d-block" style="width:100%">
          <div class="carousel-caption">
            <h3>Ranong</h3>
            <p>We love Ranong</p>
          </div>  
        </div>
      </div>
  
      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

    <div class="container mt-5 text-center">
      <h2>Hotel/Resort</h2>
      <hr>
      <div class="row mt-5">
        <div class="col-sm-6">
          <img src="/images/phuket.jpg" class="img-fluid rounded mx-auto d-block" alt="krabi" width="304" height="236">
        </div>
        <div class="col-sm-6">
          <h3>Hotel 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          <button class="button" style="vertical-align:middle"><span>Learn more </span></button>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-sm-6">
          <img src="/images/phuket.jpg" class="img-fluid rounded mx-auto d-block" alt="krabi" width="304" height="236">
        </div>
        <div class="col-sm-6">
          <h3>Hotel 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          <button class="button" style="vertical-align:middle"><span>Learn more </span></button>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-sm-6">
          <img src="/images/phuket.jpg" class="img-fluid rounded mx-auto d-block" alt="krabi" width="304" height="236">
        </div>
        <div class="col-sm-6">
          <h3>Hotel 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          <button class="button" style="vertical-align:middle"><span>Learn more </span></button>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-dark p-5 mt-3 text-white d-flex justify-content-center">
      <div class="row mt-5">
        <div class="col-sm-4">
          <h1>Contact</h1>
        </div>
        <div class="col-sm-8">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
      </div>
    </div>
  </body>
</html>