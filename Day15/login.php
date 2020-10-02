<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signin</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <style>

    .login {
      width: 500px;
      height: 300px;
      border: solid lightgray 2px;
      padding: 20px;

      margin: auto;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background-color:#bec6c4;
      box-shadow: 0 0 10px 2px lightgray;
      border-radius: 10px;
     
   
    
 /* background: radial-gradient(ellipse at center, rgba(13,13,13,1) 3%,rgba(149,149,149,1) 48%,rgba(78,78,78,1) 67%,rgba(56,56,56,1) 80%,rgba(27,27,27,1) 100%); */
 border-radius: 14px;
background: #434343;
box-shadow: inset 5px 5px 10px #2c2c2c, 
            inset -5px -5px 10px #5a5a5a;
            background: linear-gradient(to bottom, #7d7e7d 0%,#0e0e0e 100%);
    }
    .shake-horizontal {
	-webkit-animation: shake-horizontal 0.8s cubic-bezier(0.455, 0.030, 0.515, 0.955) both;
	        animation: shake-horizontal 0.8s cubic-bezier(0.455, 0.030, 0.515, 0.955) both;
}

    span{
        padding:90px; 
    }

  </style>
</head>
<body>
  


  <form action="logincheck.php" method="GET">
      
    <div class="login">
        
      <div class="form-group">
        <label for="email" class="text-white">Email</label>
        <?php

            if(isset($_COOKIE['uid']))
            {
                print('<span class="text-warning"> Wrong username/password !!</span>');
            }
        ?>
        <input  name="email" type="email" class="form-control" placeholder="email here" id="email">
        
      </div>

      <div class="form-group">
        <label for="password" class="text-white">Password</label>
        <input name="password" type="password" class="form-control" placeholder="password here" id="password">
      </div>

      <div class="form-group">
        <div class="text-white">
          Dont have account?<a class="btn btn-link" href="signup_1.html">Create here</a>
        </div>
        <input type="submit" class="btn btn-success" value="Signin">
   
      </div>
  
    </div>
  </form>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>