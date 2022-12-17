<html>
  <head>
    <title>Fantail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
      input[type=button], input[type=submit], input[type=reset] {
        background-color: #808080;
        border: none;
        font-size: 2em;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
      }

      body{
        display: flex;
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        background-color: #fff;
        
      }

      .outer{
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100vh;
        background: rgba(0, 0, 0, 0.25);
      }

    .login {
        min-height: 100vh;
    }

    .bg-image {
        animation: animate 8s ease-in-out infinite;
        background-size: cover;
        background-position: center;
    }

    .login-heading {
        font-weight: 300;
        font-size: 4em;
        color: #fff;
    }

    .btn-login {
        font-size: 0.9rem;
        letter-spacing: 0.05rem;
        padding: 0.75rem 1rem;
    }
    .emailIn{
        color: #fff;
    }
    .passIn{
        color: #fff;
    }
    



      @keyframes animate{
        0%,100%{
          background-image: url(./images/1.jpg);
        }
        50%{
          background-image: url(./images/2.jpg);
        }
        
      }
      @keyframes fadeIn{
        0%{opacity: 0;
        }
        100%{opacity: 1;
        }
      }
      
      .animate__fadeIn{
        animation: fadeIn 3s;
      }

    </style>
  </head>

  <body>
    <div class="outer">
        <div class="container-fluid ps-md-0">
            <div class="row g-0">
                <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
                
                    {{-- <div class="col-md-8 col-lg-6"> --}}
                        <div class="login d-flex  py-5">
                            <div class="container">
                                 <div class="row">
                                    <div class="col-md-9 col-lg-8 mx-auto">
                                    <div class="animate__fadeIn">
                                    <h1 class="login-heading mb-4">Let's travel!</h1>

                                        <!-- Sign In Form -->
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                <label class="emailIn" for="floatingInput">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                                <label class="passIn" for="floatingPassword">Password</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="floatingInput" placeholder="Correct Password">
                                                <label class="emailIn" for="floatingCorrectpass">Correct Password</label>
                                            </div>

                                            <div class="d-grid">
                                                <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Create Accout</button>
                                            </div>

                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>
                
                </div>
            </div>
        </div>
    </div>
  </body>
</html>