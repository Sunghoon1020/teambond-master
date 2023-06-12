<?php
// include "db.php"; 
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'teambond';

$connection = @new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_db
  
);


if(isset($_POST['delete'])){

$title = $_POST['title'];
$user_name = $_POST['user_name'];
$date = $_POST['date'];



if(!empty($title) && !empty($user_name)){
    
    $query = "DELETE from post WHERE title = '$title' and user_name = '$user_name' and date = '$date'";
    $rs = mysqli_query($connection,$query);
    
    if(!$rs){
      die("query failed".mysqli_error($connection). ' '.mysqli_errno($connection));
    }
        $message = "delete complete";
        header("Location: main.php?user_name=$user_name");
    }else{
    $message = "it didn't delete";
    header("Location: delete.php?user_name=$user_name&title=$title&date=$date");
}


}
?>