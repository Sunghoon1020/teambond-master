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


$user_name = $_GET['user_name'];
$post_user_name = $_GET['user'];
$title = $_GET['title'];



$query = "SELECT * FROM post where title='$title' and user_name='$user_name'";
$rs = mysqli_query($connection, $query);
  if($row = mysqli_fetch_assoc($rs)){
    $user_name = $row['user_name'];
    $title = $row['title'];
    $contents = $row['contents'];
    $date = $row['date'];

  }
// date
$month = date('m');
  $day = date('d');
  $year = date('Y');
  
  $today = $month . '-' . $day .'-'. $year;
  
  
    

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

th{
  height:35px;
}

th {
    padding: 16px;
}

td {
    padding: 12px;
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

</style>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
    <header>
      <h1>TeamBond App</h1>
    </header>
    <br>
    <form role="form" action="delete.php?user_name=<?=$user_name?>&title=<?=$title?>&date=<?=$date?>" enctype='multipart/form-data' method="post" autocomplete="off">
    <div class="container">
        <h2 style="text-align:center;">View Post</h2>

        <table class="tbl" border="1" style="border-collapse:collapse;">
            <thead>
                <tr>
                    <th width="100px">Title</th>
                    <th width="300px" colspan="3"><input type="text" name="title" value="<?=$title?>" style="width:490px; border:none; pointer-events:none; appearance: none;"></th>
                </tr>
                <tr>
                    <th width="100px">Author</th>
                    <th width="200px"><input type="text" name="user_name" value="<?=$user_name?>" style="border:none; pointer-events:none; appearance: none;"></th>
                    <th width="100px">Date</th>
                    <th width="200px"><input type="date" name="date" value="<?=$date?>" style="border:none; pointer-events:none; appearance: none;"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4">
                    <textarea row="5" cols="75" name="contents" style="border:none; pointer-events:none; appearance: none;"><?=$contents?></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="main.php?user_name=<?=$post_user_name?>"><button type="button" name="back">Back</button></a>
        <?php
        if($user_name == $post_user_name){
        ?>
        <a href="edit_post.php?user_name=<?=$post_user_name?>&title=<?=$title?>&user=<?=$user_name?>"><button type="button" name="edit" class='btn btn-custom btn-lg btn-block'>Edit</button></a>
        <button type="submit" name="delete" class='btn btn-custom btn-lg btn-block'>Delete</button></a>
        <?php }else{

        }
        ?>



    </div>
    </form>
    <footer class="footer">
      <p>&copy; 2023 Westcliff University</p>
    </footer>
    </body>
</html>