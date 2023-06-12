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


$comments = $_GET['comments'];
$comment_date = $_GET['comment_date'];
$comment_user_name = $_GET['comment_user_name'];
$user_name = $_GET['user_name'];
$title = $_GET['title'];

var_dump($user_name);
var_dump($title);


$query = "SELECT * FROM comment where comments='$comments' and comment_date='$comment_date'";
$rs = mysqli_query($connection, $query);
  if($row = mysqli_fetch_assoc($rs)){
    $user_name = $row['user_name'];
    $title = $row['title'];
    $contents = $row['contents'];
    $date = $row['date'];




    
if(!empty($comments) && !empty($comment_date)){
    
    $query = "DELETE from comment WHERE comments = '$comments' and comment_date = '$comment_date' and comment_user_name = '$comment_user_name'";
    $rs = mysqli_query($connection,$query);
    
    if(!$rs){
      die("query failed".mysqli_error($connection). ' '.mysqli_errno($connection));
    }
        $message = "delete complete";
        header("Location: view_post.php?user_name=$user_name&title=$title&user=$comment_user_name");

}

}






?>