<?php
include "db.php";

if(isset($_POST['login'])){

$user_name = $_POST['user_name'];
$password = $_POST['user_password'];



$user_name = mysqli_real_escape_string($connection, $user_name);
$password = mysqli_real_escape_string($connection, $password);

$query = "select * from users where user_name = '$user_name'";
$rs = mysqli_query($connection, $query);


if(!$rs){
    die("query failed". mysqli_error($connection));
}
while($row = mysqli_fetch_array($rs)){
    $db_user_name = $row['user_name'];
    $db_user_password = $row['user_password'];
}
if($user_name !== $db_user_name && $password !== $db_user_password ){
    header("Location: index.php");
}else {
    echo 'Username or Password are not matched.';
    header("Location: main.php?user_name=$user_name");
}

}