<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <title>Login </title>
    <script type= text/javascript>
         function Val()
         {
           $msg="Admin should approve.Please try later";
           alert($msg);
         }
    </script>
    <style>
@import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
body{
  margin: 0;
  height:100vh;
  padding: 0;
  font-family: sans-serif;
  background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(https://i.postimg.cc/YjcJg24M/aa.jpg);
 -webkit-background-size: cover;
  background-size: cover;
  background-position: center center;
}
.login-box{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
}
.login-box h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #4caf50;
  margin-bottom: 50px;
  padding: 13px 0;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #4caf50;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: white;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}
.btn{
  width: 100%;
  background: none;
  border: 2px solid #4caf50;
  color: white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
}
.btn:hover{
    background-color:#4caf50;
}
</style>    
    
  </head>
  <body>
   <form action ="Ucon.php" method ="POST">
   <div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Email" name ="usrnm" required />
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name ="pass" required />
  </div>

  <button type="submit" class="btn" name ="Login">Sign in</button>
</div>
</form>

  </body>
</html>


