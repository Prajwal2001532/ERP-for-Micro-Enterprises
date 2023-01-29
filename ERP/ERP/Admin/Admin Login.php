<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet"> 
    <script src ="login.js"></script>
    <style>
        body{
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(https://i.postimg.cc/YjcJg24M/aa.jpg);    
}

  
.form {
    font-family: 'Poppins', sans-serif;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    
}
/*assign full width inputs*/
  
input[type=text],
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    font-size: 20px;
    margin: auto;
    display: inline-flex;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
/*set a style for the buttons*/
  
button {
    background-color: #4CAF50;
    font-size: 24px;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
/* set a hover effect for the button*/
  
button:hover {
    opacity: 0.8;
}
/*set extra style for the cancel button*/
  
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
/*centre the display image inside the container*/
  
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}
/*set image properties*/
  
img.avatar {
    width: 30%;
    border-radius: 60%;
}
/*set padding to the container*/
  
.container {
    padding: 16px;
    font-size:15px;
}
/*set the forgot password text*/
  
span.psw {
    float: right;
    padding-top: 16px;
}
/*set styles for span and cancel button on small screens*/
  
@media screen and (max-width:00px) {
   /* span.psw {
        display: block;
        float: none;
    }*/
    .cancelbtn {
        width: 90%;
    }
}

h2{
    margin-left:  auto;
    margin-right:  auto;
    width:  100%;
    color: black;
    text-align: center;

}

.card {
     /* Add shadows to create the "card" effect */
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
     transition: 0.3s;
     background-image:url("copy.jpg");
     position: absolute;
     top: 50%;
     left: 50%;
     transform: translate(-50%,-50%);
    

}

    /* On mouse-over, add a deeper shadow */
.card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
} 
    </style>

    </head>  
<body>
     
    <h2>Admin</h2>
    <form action="conn.php"  method="post">
     <div class= "card">  
        <div class="imgcontainer">
            <img src="Admin.jpg"
                 alt="Avatar" class="avatar">
        </div>
  
        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
  
            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <input type="checkbox" checked="checked"> Remember me
            <button type="submit" name ="Login" >Login</button>
            
        </div>
  
        <div class="container" >
            <button type="reset" class="cancelbtn" >Reset</button>
            <span class="psw"> <a href="#">Forget password?</a></span>
        </div>
     </div> 
    </form>
 
</body>
  
</html>