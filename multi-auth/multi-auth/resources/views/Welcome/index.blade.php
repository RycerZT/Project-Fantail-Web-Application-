<html>
  <head>
    <title>Welcome</title>
    <link rel="stylesheet" href="animate.min.css" />
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
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
      }

      .container{
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100vh;
        animation: animate 16s ease-in-out infinite;
        background-size: cover;
      }

      .outer{
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100vh;
        background: rgba(0, 0, 0, 0.5);
      }

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

      @keyframes animate{
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
    <div class="container">
      <div class="outer">
        <div class="details">
          <div class="fadeInDown">
            <h1>Welcome To Fantail</h1>
            <a href="{{ url('login') }}" ><input type="submit" value="Welcome" ></a>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>