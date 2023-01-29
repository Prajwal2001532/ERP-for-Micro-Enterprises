<?php

     $con = mysqli_connect('localhost', 'root', '', 'admin');
     if ( mysqli_connect_errno() ) 
     {
       exit('Failed to connect to MySQL: ' . mysqli_connect_error());
     }
     if(isset($_POST['submit']))     
     {
         $pass= $_POST['psw']; 
         $id = $_POST['id']; 
         $que = "UPDATE register SET Password= '$pass'  WHERE id= '$id' " ;
         if(mysqli_query($con,$que))
         {
              echo"<script>alert('Password Updated');</script>";
              

              
         }
            
     }   
     
     if(isset($_POST['update']))
     {
         $name=$_POST['nm'];
         $cont=$_POST['con'];
         $Email=$_POST['mail'];
         $id = $_POST['id']; 
         $que = "UPDATE register SET username ='$name', Phone='$cont', email = '$Email'  WHERE id= '$id' " ;
         if(mysqli_query($con,$que))
         {
              echo"<script>alert('Profile updated');</script>";
              

              
         }
            
     }      
 ?>    