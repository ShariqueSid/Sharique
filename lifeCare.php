<?php
if(isset($_POST['Submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $day = $_POST['day'];
    $time = $_POST['time'];
    $message = $_POST['message'];

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'my_php_project';

    $conn = mysqli_connect($host,$user, $password, $dbname);
    $sql = "INSERT INTO dbStore(name, email, mobile, day, time, message) values('$name','$email','$mobile','$day','$time','$message')";
    mysqli_query($conn, $sql);
}