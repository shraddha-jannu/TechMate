<?php
    include('loginConnect.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
       
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  

    $sql = "select *from registration where username = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    
    if($count == 1){  
        //echo "<h1><center> $username $password </center></h1>";  
        include 'DashbordHtml.html';
    }  
    else{  
        //echo "<h1> Login failed. Invalid username or password.</h1>";  
        echo '<script>alert("Invalid username or password..!!")</script>';
        include 'Login.html';
    }     
?>