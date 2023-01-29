
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
      // Get the modal
     var modal = document.getElementById('id01');

      // When the user clicks anywhere outside of the modal, close it
     window.onclick = function(event) {
     if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    
    <!----======== CSS ======== -->
    <style>
        /* Google Font Import - Poppins */
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{
    margin: 0px;
    padding:0px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

:root{
    /* ===== Colors ===== */
    --body-color: #E4E9F7;
    --sidebar-color: #FFF;
    --primary-color: #695CFE;
    --primary-color-light: #F6F5FF;
    --toggle-color: #DDD;
    --text-color: #707070;

    /* ====== Transition ====== */
    --tran-03: all 0.2s ease;
    --tran-03: all 0.3s ease;
    --tran-04: all 0.3s ease;
    --tran-05: all 0.3s ease;
}

body{
    min-height: 100vh;
    background-color: var(--body-color);
    transition: var(--tran-05);
}

::selection{
    background-color: var(--primary-color);
    color: #fff;
}

body.dark{
    --body-color: #18191a;
    --sidebar-color: #242526;
    --primary-color: #3a3b3c;
    --primary-color-light: #3a3b3c;
    --toggle-color: #fff;
    --text-color: #ccc;
}

/* ===== Sidebar ===== */
 .sidebar{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    padding: 10px 14px;
    background: var(--sidebar-color);
    transition: var(--tran-05);
    z-index: 100;  
}
.sidebar.close{
    width: 88px;
}


.sidebar li{
    height: 50px;
    list-style: none;
    display: flex;
    align-items: center;
    margin-top: 10px;
}

.sidebar header .image,
.sidebar .icon{
    min-width: 60px;
    border-radius: 6px;
}

.sidebar .icon{
    min-width: 60px;
    border-radius: 6px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}

.sidebar .text,
.sidebar .icon{
    color: var(--text-color);
    transition: var(--tran-03);
}

.sidebar .text{
    font-size: 17px;
    font-weight: 500;
    white-space: nowrap;
    opacity: 1;
}
.sidebar.close .text{
    opacity: 0;
}


.sidebar header{
    position: relative;
}

.sidebar header .image-text{
    display: flex;
    align-items: center;
}
.sidebar header .logo-text{
    display: flex;
    flex-direction: column;
}
header .image-text .name {
    margin-top: 2px;
    font-size: 18px;
    font-weight: 600;
}

header .image-text .profession{
    font-size: 16px;
    margin-top: -2px;
    display: block;
}

.sidebar header .image{
    display: flex;
    align-items: center;
    justify-content: center;
}

.sidebar header .image img{
    width: 40px;
    border-radius: 6px;
}

.sidebar header .toggle{
    position: absolute;
    top: 50%;
    right: -25px;
    transform: translateY(-50%) rotate(180deg);
    height: 25px;
    width: 25px;
    background-color: var(--primary-color);
    color: var(--sidebar-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    cursor: pointer;
    transition: var(--tran-05);
}

body.dark .sidebar header .toggle{
    color: var(--text-color);
}

.sidebar.close .toggle{
    transform: translateY(-50%) rotate(0deg);
}

.sidebar .menu{
    margin-top: 40px;
}

.sidebar li.search-box{
    border-radius: 6px;
    background-color: var(--primary-color-light);
    cursor: pointer;
    transition: var(--tran-05);
}

.sidebar li.search-box input{
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    background-color: var(--primary-color-light);
    color: var(--text-color);
    border-radius: 6px;
    font-size: 17px;
    font-weight: 500;
    transition: var(--tran-05);
}
.sidebar li a{
    list-style: none;
    height: 100%;
    background-color: transparent;
    display: flex;
    align-items: center;
    height: 100%;
    width: 100%;
    border-radius: 6px;
    text-decoration: none;
    transition: var(--tran-03);
}

.sidebar li a:hover{
    background-color: var(--primary-color);
}
.sidebar li a:hover .icon,
.sidebar li a:hover .text{
    color: var(--sidebar-color);
}
body.dark .sidebar li a:hover .icon,
body.dark .sidebar li a:hover .text{
    color: var(--text-color);
}

.sidebar .menu-bar{
    height: calc(100% - 55px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow-y: scroll;
}
.menu-bar::-webkit-scrollbar{
    display: none;
}
.sidebar .menu-bar .mode{
    border-radius: 6px;
    background-color: var(--primary-color-light);
    position: relative;
    transition: var(--tran-05);
}

.menu-bar .mode .sun-moon{
    height: 50px;
    width: 60px;
}

.mode .sun-moon i{
    position: absolute;
}
.mode .sun-moon i.sun{
    opacity: 0;
}
body.dark .mode .sun-moon i.sun{
    opacity: 1;
}
body.dark .mode .sun-moon i.moon{
    opacity: 0;
}

.menu-bar .bottom-content .toggle-switch{
    position: absolute;
    right: 0;
    height: 100%;
    min-width: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    cursor: pointer;
}
.toggle-switch .switch{
    position: relative;
    height: 22px;
    width: 40px;
    border-radius: 25px;
    background-color: var(--toggle-color);
    transition: var(--tran-05);
}

.switch::before{
    content: '';
    position: absolute;
    height: 15px;
    width: 15px;
    border-radius: 50%;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    background-color: var(--sidebar-color);
    transition: var(--tran-04);
}

body.dark .switch::before{
    left: 20px;
}

.home{
    position: absolute;
    top: 0;
    top: 0;
    left: 250px;
    height: 100vh;
    width: calc(100% - 250px);
    background-color: var(--body-color);
    transition: var(--tran-05);
}
.home .text{
    font-size: 30px;
    font-weight: 500;
    color: var(--text-color);
    padding: 12px 60px;
}

.sidebar.close ~ .home{
    left: 78px;
    height: 100vh;
    width: calc(100% - 78px);
}
body.dark .home .text{
    color: var(--text-color);
}

.Manage{
   box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
   background-color:white; 
   color:white;
   border-collapse: collapse;
   width: 100%;
   border: 1px solid #ddd;
   padding: 8px;
   font-size: 17px;
   opacity: 2;
}
.Manage {
  width: 100%;
  background-color: #04AA6D;
  overflow:auto;
}

#tabledata {
  font-family: Poppins;
  border-collapse: collapse;
  width: 100%;
}

#tabledata td, #tabledata th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
  font-size:17px;
}

#tabledata tr:nth-child(even){background-color: #f2f2f2;}

#tabledata tr:hover {background-color: #ddd;}

#tabledata th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  font-size:17px;
  background-color: #04AA6D;
  color: white;
}

.tableout{
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
}

.btn {
  background-color: #4CAF50; /* Green */
  text-align:center;
  padding: 10px 22px;
  font-size: 16px;
  font-family: 'Poppins', sans-serif;
}
.btn:hover{
    color:white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 20px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 80%;
  }
}


</style>
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Admin</title>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="Admin.jpg" alt="Ava">
                </span>

                <div class="text logo-text">
                    <span class="name">Admin</span>
                    <span class="profession">Panel</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">



                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="A_dash.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Reports.php">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Reports</span>
                        </a>
                    </li>


                    <li class="nav-link">
                        <a href="Inventory.php">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Inventory</span>
                        </a>
                    </li>
                    
                    <li class="nav-link">
                        <a href="ManI.php">
                            <i class='bx bx-add-to-queue icon' ></i>
                            <span class="text nav-text">Manage Inventory</span>
                        </a>
                    </li>


                    <li class="nav-link">
                        <a href="ManU.php">
                            <i class='bx bx-user-check icon' ></i>
                            <div class="manage">
                             <span class="text nav-text">Manage users</span>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="node">
                    <a href="Logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    

    <section class="home">
        <div class="text">Inventory &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button  class="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">+Add product</button> 
            <br> <br>

            <div id="id01" class="modal">
  
  <form class="modal-content animate" action="AddProduct.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close ">&times;</span>
    </div>

    <div class="container">
         <label for="pname">Product name<b></b></label>
         <input type="text" placeholder="Enter product_Name" name="uname" required>

         <label for="psw"><b>Price</b></label>
           <input type="text" placeholder="Enter Price" name="price" required>

        <label for="psw"><b>Availability</b></label>
           <input type="text" placeholder="Enter Availability" name="avail" required> 
         <button type="submit" name="Add">Add</button>
           
        </div>

      
</form>
</div>   
        <div class = " tableout ">   
              <table  id= "tabledata" class=" table table-striped table-hover table-bordered">
                <tr>  
                  <th>Item.no</th>
                  <th>Product Name</th>
                  <th>price</th>
                  <th>Availability</th>
                </tr>
                 
                 <?php

                    $con = mysqli_connect('localhost', 'root', '', 'admin');
                    if ( mysqli_connect_errno() ) {
	                  exit('Failed to connect to MySQL: ' . mysqli_connect_error());
                     }
                    $q = "SELECT * FROM inventory" ;

                    $query = mysqli_query($con,$q); 

               while($res = mysqli_fetch_array($query)){
             ?>
            <tr>
              <td> <?php echo $res['Item.no']; ?> </td>
              <td>
                    <br>  
                      <p> <?php echo $res['Item name'];  ?> </p> 
                      <br>
            </td>

              <td> ₹<?php echo $res['Price'];  ?> </td>
              <td> <?php echo $res['Availability'];  ?> </td> 
              
             </tr>

            <?php 
             } 
            ?>                  
                 
                 
              </table>    
         </div>      
         


        </div>
    
    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");
      Usermanage = body.querySelector(".manage");
      sect = body.querySelector(".home");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
});


modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});



    </script>

</body>
</html>
