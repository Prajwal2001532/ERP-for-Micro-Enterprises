<?php
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">

<style>
body {
   font-family:  'Poppins', sans-serif;
   background-image: url("abck.jpg");
   background-size: cover;
   
  
}
* {
   box-sizing: border-box;
}
h1 {
   text-align: center;
   color: white;
   font-family: Helvetica;
}
form {
        border: 2px  ;
        padding: 10px;
        width: 35%;
        margin: auto;
        
        
}
.imgcontainer{

}
.fieldContainer {
   display: inline-flex;
   width: 100%;
   margin-bottom: 15px;
   border: 2px ;
   margin: auto;
   padding: 10px;
}


.icon {
   font-size: 30px;
   padding: 10px;
   background: rgb(11, 9, 116);
   color: white;
   min-width: 50px;
   text-align: center;
}
.field {
   font-size: 20px;
   width: 100%;
   padding: 10px;
   outline: none;
}
.field:focus {
   border: 2px ridge; black;

}

.icon{
   background: black;
}
.btn {
   font-size: 24px;
   background-color: #4CAF50;
   color: white;
   padding: 12px 20px;
   border: 1px solid #ccc;
   cursor: pointer;
   width: 100%;
   opacity: 0.9;
   display: inline-block;
   border-radius: 8px;
}
.btn:hover {
   opacity: 1;
}

.container {
        padding: 50px;        
        
    }

@media screen and (max-width:00px) {
       /* span.psw {
            display: block;
            float: none;
        }*/
        .cancelbtn {
            width: 100%;
        }
    }

}

.imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        
    }

img.avatar {
        
        border-radius: 50%;
        display: block;
        margin-left: auto;
        margin-right:  auto;
        width: 20%;
    }

</style>
</head>
<body>
 <div class = "container">
 <h1>Register</h1> 
 <div class ="imgcontainer">
 <img src="user2.png" class ="avatar" alt="Av"> 
</div>
 <form action="Connect.php" method="POST" id = "reg"> 
  

  <div class="fieldContainer">
     <i class="fa fa-user icon"></i>
     <input class="field" type="text" placeholder="Enter Username" name ="username" required />
  </div>
  <div class="fieldContainer">
      <i class="fa fa-envelope icon"></i>
      <input class="field" type="text" placeholder="Enter username@gmail.com" name="email" required />
  </div>
  <div class="fieldContainer">
      <i class="fa fa-key icon"></i>
      <input class="field" type="password" placeholder="Enter Password" name="password" required />
  </div>
  <div class="fieldContainer">
      <i class="fa fa-birthday-cake icon" aria-hidden="true"></i>
      <input class="field" type="text" placeholder="YYYY-MM-DD" name="dob" required/>
  </div>
  <div class="fieldContainer">
      <i class="fa fa-phone icon" aria-hidden="true"></i>
      <input class="field" type="text" placeholder="Contact Number" name="Pno" required/>
  </div>

  <button type="submit" class="btn" name="submit" >Submit</button>
  <p style = "color:#CCCCCC" align ="center">Already registered ?<a href="Uslg.php">Login</p>
</form>
 
</div>
</body>
</html>
