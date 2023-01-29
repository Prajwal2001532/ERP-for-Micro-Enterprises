<?php

     $con = mysqli_connect('localhost', 'root', '', 'admin');
     if ( mysqli_connect_errno() ) 
     {
       exit('Failed to connect to MySQL: ' . mysqli_connect_error());
     }
     if(isset($_POST['Add']))
     {
         $id = $_POST['id']; 
         $que = "UPDATE register SET Approval = '1'  WHERE id= '$id' " ;
         if(mysqli_query($con,$que))
         {
              echo"<script>alert('Account Approved');</script>";
              

              
         }
            
     }      
     if(isset($_POST['Submit']))
     {
         $id = $_POST['id'];
         $q = " DELETE FROM register WHERE id = '$id' ";
         if(mysqli_query($con,$q))
         {
          $message = "Account Deleted";   
           echo "<script type='text/javascript'>prompt('$message');</script>";
           header("location: ManU.php");
         }  
     }

 ?>