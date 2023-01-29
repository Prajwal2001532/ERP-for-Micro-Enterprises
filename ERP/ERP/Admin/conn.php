<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'admin');
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if ( !isset($_POST['username'], $_POST['password']) ) {
	exit('Please fill both the username and password fields!');
}
if(isset($_POST['Login'])){
    $usr=$_POST['username'];
    $pass=$_POST['password'];
    $stmt="SELECT * FROM ad WHERE username ='".$usr."' and password = '".$pass."'";    
    $res=mysqli_query($con,$stmt);
    if($res){
        if(mysqli_num_rows($res)>0){
                $message = "Login Successful";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("location: A_dash.php");
        }else{
            $message ="Username or Password is incorrect.\\nTry again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
}
?>