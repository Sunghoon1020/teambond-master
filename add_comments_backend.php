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
  
if(isset($_POST['comments_submit'])){

$user_name = $_POST['user_name'];
$title = $_POST['title'];
$contents = $_POST['contents'];        
$date = $_POST['date'];
$comment_user_name = $_POST['comment_user_name'];
$comments = $_POST['comments'];
$comment_date = $_POST['comment_date'];



var_dump('test'.$comment_user_name);
var_dump('test'.$comments);
var_dump('test'.$comment_date);



if(!empty($comment_user_name) && !empty($comments)){
    
    $query = "INSERT INTO comment(user_name,
    title,
    date,
    contents,
    comment_user_name,
    comments,
    comment_date
    )
    VALUES('$user_name',
    '$title',
    '$date',
    '$contents',
    '$comment_user_name',
    '$comments',
    '$comment_date'
    )"; 
    $rs = mysqli_query($connection,$query);
    if(!$rs){
        die("query failed".mysqli_error($connection). ' '.mysqli_errno($connection));
    }
    $message = "creat post";
    header("Location: view_post.php?user_name=$user_name&title=$title&user=$comment_user_name");
    }else{
        $message = "fileds cannot be empty";
        header("Location: add_post.php?user_name=$user_name");
    }


  
}
?>