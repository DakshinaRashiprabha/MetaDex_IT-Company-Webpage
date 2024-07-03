<?php 
    include("config.php");
    include("login.php")
    ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AdminSignIn</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form name="form" action="login.php" onsubmit="return isvalid()" method="POST" class="sign-in-form">
            <h2 class="title">Sign In</h2>

          

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" id="btn" name="submit" value="Login" class="btn solid" />

            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Welcome</h3>
            <p>Welcome to the MetaDex Solution Admin Panel</p>
            <a href="../index.html"
              ><button class="btn transparent" id="sign-up-btn">
                << Home
              </button></a
            >
          </div>
          <img src="./img/log.svg" class="image" alt="" />
        </div>

        <div class="panel right-panel">
          <div class="content">
            <h3>One of us?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio
              minus natus est.
            </p>
            <button class="btn transparent" id="sign-in-btn">Sign In</button>
          </div>
          <img src="./img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script>
            function isvalid(){
                var user = document.form.username.value;
                var pass = document.form.password.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(username.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(password.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>

    <script src="./app.js"></script>
  </body>
</html>
