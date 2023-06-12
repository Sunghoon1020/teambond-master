<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_db = 'teambond';
 
  $connection = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
    
  );if(isset($_POST['submit'])){

$user_name = $_POST['user_name'];
$user_id = $_POST['user_id'];
$user_email = $_POST['user_email'];        
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$city = $_POST['city'];




if(!empty($user_name)){
    
    $query = "UPDATE users SET user_email = '$user_email', first_name = '$first_name', last_name = '$last_name', address = '$address', city = '$city' WHERE user_name = '$user_name'";
    var_dump($query);
    $rs = mysqli_query($connection,$query);
    
    var_dump($query);
    if(!$rs){
        die("query failed".mysqli_error($connection). ' '.mysqli_errno($connection));
    }
    $message = "edit post";
    header("Location: view_profile.php?user_name=$user_name");
    }else{
        $message = "fileds cannot be empty";
        header("Location: edit_profile.php?user_name=$user_name.php");
    }

    
  }

?>