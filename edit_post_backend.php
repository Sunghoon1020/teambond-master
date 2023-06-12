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
  );
  
$post_name = 0; 
$post_user_name = $_GET['user'];

if(isset($_POST['submit'])){

$user_name = $_POST['user_name'];
$title = $_POST['title'];
$contents = $_POST['contents'];        
$date = $_POST['date'];





if(!empty($title) && !empty($contents)){
    
    $query = "UPDATE post SET title = '$title', contents = '$contents' WHERE title='$title' and user_name = '$user_name' and date = '$date'";

    $rs = mysqli_query($connection,$query);
    
    var_dump($query);
    if(!$rs){
        die("query failed".mysqli_error($connection). ' '.mysqli_errno($connection));
    }
    $message = "edit post";
    header("Location: view_post.php?title=$title&user_name=$user_name&user=$post_user_name");
    }else{
        $message = "fileds cannot be empty";
        header("Location: view_post.php?title=$title&user_name=$user_name&user=$post_user_name");
    }


}
?>