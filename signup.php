<?php
include "db.php"; 
if(isset($_POST['submit'])){

$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];        
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];     
$address = $_POST['address'];
$city = $_POST['city'];     


if(!empty($user_name) && !empty($user_email) && !empty($user_password)){

    $user_name = mysqli_real_escape_string($connection,$user_name);
    $user_email = mysqli_real_escape_string($connection,$user_email);
    $user_password = mysqli_real_escape_string($connection,$user_password);

    // $user_password = password_hash('password', PASSWORD_BCRYPT, array('cost' => 10));

    
    $query = "INSERT INTO users(user_name,
    user_email,
    user_password,
    first_name,
    last_name,
    address,
    city
    )
    VALUES('$user_name',
    '$user_email',
    '$user_password',
    '$first_name',
    '$last_name',
    '$address',
    '$city'
    )"; 
    var_dump($query);
    $register_user_query = mysqli_query($connection,$query);
    
    // var_dump($query);
    if(!$register_user_query){
        die("query failed".mysqli_error($connection). ' '.mysqli_errno($connection));
    }
    $message = "Your Registration has been submitted";
    header("Location: index.php");
    }else{
        $message = "fileds cannot be empty";
        header("Location: registration.php");
    }


}
?>