<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'admin');
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if ( !isset($_POST['usrnm'], $_POST['pass']) ) {
	exit('Please fill both the username and password fields!');
}
if(isset($_POST['Login']))
{
    $usr=$_POST['usrnm'];
    $pass=$_POST['pass'];
    if (!filter_var($usr, FILTER_VALIDATE_EMAIL)) {
        $msg = "Invalid email format";
        echo"<script type='text/javascript'>alert('$msg');</script>";  
        die();  
    }   
    $stmt="SELECT email,password,Approval FROM register WHERE email ='".$usr."' and password = '".$pass."' and Approval ='1' ";    
    $res=mysqli_query($con,$stmt);
    if($res){
        if(mysqli_num_rows($res)>0){
                $message = "Login Successful";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("location: U_dash.php");
        }
        
        else{
            $message ="Account should be approved.\\nTry again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
   
}
?>