<?php
include "db.php";

$user_name = $_GET['user_name'];

$query = "SELECT * from post";
$rs = mysqli_query($connection, $query);
  if($row = mysqli_fetch_assoc($rs)){
    $load_user_name = $row['user_name'];
    $load_title = $row['title'];
    $load_contents = $row['contents'];
    $load_date = $row['date'];

  }


?>
<style>

.container{
    margin-left:auto;
    margin-right:auto;
}
.top_tbl{
    margin-left:auto;
    margin-right:auto;

}

.tbl{
    margin-left:auto;
    margin-right:auto;
    border-left: 1px solid;
    border-right: 1px solid;
    padding-left: 20px;
}

.tbl tr {
    border-bottom: 1px solid black;
    border-top: 1px solid black;
    border-collapse: collapse;
}

th {
    padding: 16px;
}

td {
    padding-top: 12px;
    padding-bottom: 12px;
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
	margin-top: 30px;
	border: none;
	background-color: #1c8adb;
	color: #fff;
	padding: 10px 20px;
	border-radius: 5px;
	cursor: pointer;
}

.container button:hover {
	background-color: #39ace7;
	color: #000;
}
.btn{
    margin-right:0;
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
    <div class="container">
        <div class="top_tbl" style="width:810px; text-align:right;">
            <br><br>
            <h1 style="text-align:center; font-weight:600;" >Welcome to TeamBond</h1>
            <h3 style="text-align:center;">You may create any topic you like. Posts can be viewed by everyone in your organization.</h3>
        </div>
        <br/>
        <br/>
        <br/>
        <table class="tbl" style="width:810px;border-collapse:collapse; text-align:center;">
            <thead class="table-header">
                <tr>
                    <th width="30px" height="35px">#</th>
                    <th width="400px">Title</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Comment</th>
                </tr>
            
            </thead>
            <tbody>
            <?php
            $query = "SELECT * FROM post order by title";
            $post_rs = mysqli_query($connection, $query);
            $idx=1;
            while($row = mysqli_fetch_assoc($post_rs)){
                $post_user_name = $row['user_name'];
                $post_title = $row['title'];
                $post_contents = $row['contents'];
                $post_date = $row['date'];

                
                echo "<tr>";
                echo "<td>$idx</td>";
                echo "<td><a href='view_post.php?user_name={$post_user_name}&title={$post_title}&user={$user_name}'><input type='text' name='title' value='{$post_title}' style='text-align:center; border:none; pointer-events:none; appearence:none;'></a></td>";
                
                if($user_name == $post_user_name){
                echo "<td><a href='view_profile.php?user_name={$post_user_name}&user={$user_name}'><input type='text' name='user_name' value='{$post_user_name}' style='text-align:center; border:none; pointer-events:none; appearence:none;'></a></td>";
                }else{
                echo "<td><a href='other_profile.php?user_name={$post_user_name}&user={$user_name}'><input type='text' name='user_name' value='{$post_user_name}' style='text-align:center; border:none; pointer-events:none; appearence:none;'></a></td>";

                }
                echo "<td><input type='text' name='date' value='{$post_date}' style='text-align:center; border:none; pointer-events:none; appearence:none;'></td>";
                

                $comment_count_query = "SELECT count(comments) as cnt FROM comment where user_name = '$post_user_name' and title = '$post_title' and date = '$post_date'";
                $comment_count_rs = mysqli_query($connection, $comment_count_query);
                if($cnt = mysqli_fetch_assoc($comment_count_rs)){
                    $comment_cnt = $cnt['cnt'];
                echo "<td>{$comment_cnt}</td>";

                }


                // echo "<td><button type='submit' name='delete' >x</button></td>";
                
                echo "</tr>";
                $idx++;
            }
            ?>
             </tbody>
        </table>
        <br/>
        <form role="form" action="add_post.php?user_name=<?=$user_name?>" enctype='multipart/form-data' method="post" autocomplete="off">
            <button type="submit" class='btn btn-custom btn-lg btn-block' style="text-align:right;">Add Post</button>
        </form>
    </div>

    <script>
        function del(t){
            var t = t;
            var tr = t.parentNode.parentNode;
            console.log(tr);

            tr.remove();
        }
    </script>
    </form>
    <footer class="footer">
      <p>&copy; 2023 Westcliff University</p>
    </footer>
    </body>
</html>