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

.tbl button{
  border: none;
background-color: #1c8adb;
color: #fff;
padding: 10px 10px;
border-radius: 5px;
cursor: pointer;
}
.tbl button:hover {
	background-color: #39ace7;
	color: #000;
}

.header button {
	border: none;
	background-color: #1c8adb;
	color: #fff;
	border-radius: 5px;
	cursor: pointer;
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
    <table class="header" width="100%">
        <td width="20%" style="text-align:right;">
        </td>
        <td width="60%">
            <h1 style="color: white; text-align:center;">TeamBond</h1>
        </td>
        <td width="20%" style="text-align:right;">
        <span style="color:white;text-align:right; padding-right:25px;">Login <a href="view_profile.php?user_name=<?=$post_user_name?>" style="color:white"><?=$post_user_name?></a></span>
        <a href="index.php" style="padding-right:15px;"><button>Sign Out</button></a>
        </td>
    </table>    
</header>

    <br>
    <form role="form" action="delete.php?user_name=<?=$user_name?>&title=<?=$title?>&date=<?=$date?>" enctype='multipart/form-data' method="post" autocomplete="off">
    <div class="container">
        <h2 style="text-align:center;">View Post</h2>

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
                    <textarea row="5" cols="75" name="contents" style="border:none; pointer-events:none; appearance: none; min-height:100px;"><?=$contents?></textarea>
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

    <form role="form" action="add_comments_backend.php?user_name=<?=$user_name?>&title=<?=$title?>&date=<?=$date?>&contents=<?=$contents?>" enctype='multipart/form-data' method="post" autocomplete="off">
    <div class="container">
        <h3>Comment</h3>
          <table class="tbl" border="1" style="border-collapse:collapse; width:630px;">
            <thead>
               <tr>
                <th width='150px' style="background-color: #D5D5D5;">Comment Author</th>
                <th width="200px"><input type='text' name='comment_user_name' value='<?=$post_user_name?>' style='border:none; pointer-events: none; appearance: nopne;'></th>
                <th width="100px" style="background-color: #D5D5D5;">Date</th>
                <th width="200px"><input type="text" name="comment_date" value="<?=$today?>" style="border:none;"></th>
               </tr>
            </thead>
            <tbody>
               <tr>
                <td colspan="4"><textarea name="comments" row="3" cols="75" style="border:none; min-height: 50px;"></textarea>
                
                  <input type="hidden" name="user_name" value="<?=$user_name?>">
                  <input type="hidden" name="title" value="<?=$title?>">
                  <input type="hidden" name="contents" value="<?=$contents?>">
                  <input type="hidden" name="date" value="<?=$date?>">
                </td>


              </tr>
            </tbody>
          </table>
          <br>
          <a><button type="submit" name="comments_submit" >Submit</button></a>
      </form>
      </div>



      <?php
      $c_comment_query = "SELECT * from comment where user_name='$user_name' and title='$title' and date = '$date'";
      $c_commnet_rs = mysqli_query($connection, $c_comment_query);
      if($check = mysqli_fetch_assoc($c_commnet_rs)){
        $check_comments = $check['comments'];

        if($check_comments == ''){
        
        }else{

          if($post_user_name == $user_name){?>
            <form role="form" action="del_comments.php?comments=<?=$comments?>&comment_date=<?=$comment_date?>" enctype='multipart/form-data' method="post" autocomplete="off">

            <table class="tbl" border="1" style="border-collapse:collapse; width:630px;">
              <thead>
                <tr>
                  <th colspan="5" style="text-align:left; padding-left:10px; background-color: #D5D5D5; height:35px;">Comment List</th>
                </tr>
              </thead>
              <tbody>
  
                <?php
                $comment_query = "SELECT * from comment where user_name='$user_name' and title='$title' and date = '$date' order by comment_date, comment_user_name";
                $comment_rs = mysqli_query($connection, $comment_query);
                $comment_cnt = 1;
                while($row = mysqli_fetch_assoc($comment_rs)){
                    $comment_user_name = $row['comment_user_name'];
                    $comments = $row['comments'];
                    $comment_date = $row['comment_date'];
                  ?>
  
                <tr>
                  <td width="30px" style="text-align:center;"><?php echo $comment_cnt;?></td>
                  <td><textarea row='3' cols='50' style='border:none; pointer-events:none; appearance: none;'><?=$comments?></textarea></td>
                  <td><input type='text' name='comment_author' value='<?=$comment_user_name?>' style="border:none; pointer-events:none; appearance: none; width:80px;"></td>
                  <td><input type='text' name='comment_date' value='<?=$today?>' style='border:none; pointer-events: none; appearance: none;'></td>
                  <td><a href="del_comments.php?comments=<?=$comments?>&comment_date=<?=$comment_date?>&comment_user_name=<?=$comment_user_name?>&user_name=<?=$user_name?>&title=<?=$title?>"><button type="button" name="delete">X</button></a></td>
                </tr>
  
                <?php
                $comment_cnt++;
                }?>
              </tbody>
            </table>
              </form>



        <?php  } else{



      ?>
        <br>
        <form role="form" action="del_comments.php?comments=<?=$comments?>&comment_date=<?=$comment_date?>" enctype='multipart/form-data' method="post" autocomplete="off">

          <table class="tbl" border="1" style="border-collapse:collapse; width:630px;">
            <thead>
              <tr>
                <th colspan="4" style="text-align:left; padding-left:10px; background-color: #D5D5D5; height:35px;">Comment List</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $comment_query = "SELECT * from comment where user_name='$user_name' and title='$title' and date = '$date' order by comment_date, comment_user_name";
              $comment_rs = mysqli_query($connection, $comment_query);
              $comment_cnt = 1;
              while($row = mysqli_fetch_assoc($comment_rs)){
                  $comment_user_name = $row['comment_user_name'];
                  $comments = $row['comments'];
                  $comment_date = $row['comment_date'];
                ?>

              <tr>
                <td width="30px" style="text-align:center;"><?php echo $comment_cnt;?></td>
                <td><textarea row='3' cols='50' style='border:none; pointer-events:none; appearance: none;'><?=$comments?></textarea></td>
                <td><input type='text' name='comment_author' value='<?=$comment_user_name?>' style="border:none; pointer-events:none; appearance: none; width:80px;"></td>
                <td><input type='text' name='comment_date' value='<?=$comment_date?>' style='border:none; pointer-events: none; appearance: none;'></td>
              </tr>

              <?php
              $comment_cnt++;
              }?>
            </tbody>
          </table>
            </form>
          <?php
        }
        }}?>

    <footer class="footer">
      <p>&copy; 2023 Westcliff University</p>
    </footer>
    </body>
</html>