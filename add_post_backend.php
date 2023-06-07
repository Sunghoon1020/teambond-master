<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'teambond';
 
  $connection = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
    
  );if(isset($_POST['submit'])){

$user_name = $_POST['user_name'];
$title = $_POST['title'];
$contents = $_POST['contents'];        
$date = $_POST['date'];


if(!empty($title) && !empty($contents)){
    
    $query = "INSERT INTO post(user_name,
    title,
    contents,
    date
    )
    VALUES('$user_name',
    '$title',
    '$contents',
    '$date'
    )"; 
    var_dump($query);
    $rs = mysqli_query($connection,$query);
    var_dump($rs);
    // var_dump($query);
    if(!$rs){
        die("query failed".mysqli_error($connection). ' '.mysqli_errno($connection));
    }
    $message = "creat post";
    header("Location: main.php");
    }else{
        $message = "fileds cannot be empty";
        header("Location: add_post.php");
    }


}
?>