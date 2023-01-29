<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'admin');
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if(isset($_POST['Add']))
{
      $Pname=$_POST['uname'];
      $Price=$_POST['price'];
      $Avail=$_POST['avail'];

    $sql="INSERT INTO inventory(Item.no,Item name,Price,Quantity,Availability) VALUES ('','$Pname', '$Price','','$Avail')";   
    $res=mysqli_query($con,$sql);
    if($res){
        if(mysqli_num_rows($res)>0){
                $message = "Product added";
                echo "<script type='text/javascript'>alert('$message');</script>";
                
        }
        
        else{
            $message ="Product insertion failed";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
   
}
?>
    