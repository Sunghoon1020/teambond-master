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

$post_user_name = $_GET['user'];
$user_name = $_GET['user_name'];
$title = $_GET['title'];

$query = "SELECT * FROM post where title='$title' and user_name='$user_name'";
$rs = mysqli_query($connection, $query);
  if($row = mysqli_fetch_assoc($rs)){
    $user_name = $row['user_name'];
    $title = $row['title'];
    $contents = $row['contents'];
    $date = $row['date'];

  }    

?>


<style>
.container{
  margin-left:auto;
  margin-right:auto;
}
.tbl{
    margin-left:auto;
    margin-right:auto;
}

.footer{
    background-color: #333;
    color: white;
    padding: 10px;
    text-align: center;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
}  
.container button {
border: none;
background-color: #1c8adb;
color: #fff;
padding: 10px 10px;
border-radius: 5px;
cursor: pointer;
}

.container button:hover {
	background-color: #39ace7;
	color: #000;
}
</style>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
    <?php include "header.php" ?>

    <br>
    <form role="form" action="edit_post_backend.php?user=<?=$post_user_name?>" method="post" autocomplete="off">
    <div class="container">
    <h2 style="text-align:center;">Edit Post</h2>

        <table class="tbl" border="1" style="border-collapse:collapse;">
            <thead>
                <tr>
                    <th width="100px" style="background-color: #D5D5D5;">Title</th>
                    <th width="300px" colspan="3"><input type="text" name="title" value="<?=$title?>" style="width:490px; border:none; pointer-events:none; appearance: none;"></th>
                </tr>
                <tr>
                    <th width="100px" style="background-color: #D5D5D5;">Author</th>
                    <th width="200px"><input type="text" name="user_name" value="<?=$user_name?>" style="border:none; pointer-events:none; appearance: none;"></th>
                    <th width="100px" style="background-color: #D5D5D5;">Date</th>
                    <th width="200px"><input type="text" name="date" value="<?=$date?>" style="border:none; pointer-events:none; appearance: none;"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4">
                    <textarea row="5" cols="75" name="contents" style="border:none;"><?=$contents?></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="edit_post.php?user_name=<?=$user_name?>&title=<?=$title?>&user=<?=$post_user_name?>"><button type="submit" name="submit" class='btn btn-custom btn-lg btn-block'>Edit</button></a>
        <a href="main.php?user_name=<?=$user_name?>"><button type="button" name="back" class='btn btn-custom btn-lg btn-block'>Back</button></a>

    </div>
    </form>
    <footer class="footer">
      <p>&copy; 2023 Westcliff University</p>
    </footer>
    </body>
</html>