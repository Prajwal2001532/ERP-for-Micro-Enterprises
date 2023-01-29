<?php
session_start();
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['password']) &&
        isset($_POST['dob']) && isset($_POST['email'])  && isset($_POST['Pno'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $Dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['Pno'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "admin";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO register(username, password, email, Dob, Phone) values(?, ?, ?, ?, ?)";


            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
             
            if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
                $msg = "Username : Only letters and white space allowed";
                echo"<script type='text/javascript'>alert('$msg');</script>";  
                die();

              }

        
            if (!preg_match('|^[A-Z0-9._%+-]+@gmail\.com$|i', $email)) {
                $msg = "Invalid email format";
                echo"<script type='text/javascript'>alert('$msg');</script>";  
                die();  
            }
            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssii",$username, $password, $email, $Dob, $phone);

                if ($stmt->execute()) 
                {
                    
                    $msg= "Registered sucessfully. Sent for Approval";
                    echo"<script type='text/javascript'>alert('$msg');</script>"; 
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                $msg="Email already exists. Use different email";
                echo "<script type='text/javascript'>alert('$msg');</script>"; 
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        $msg= "All fields are Mandatory.";
        echo "<script type='text/javascript'>alert('$msg');</script>"; 
        die();
    }
}
else {
    $msg= "Registration unsuccessful";
    echo "<script type='text/javascript'>alert('$msg');</script>"; 
}
?>