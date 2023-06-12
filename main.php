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
th {
  background-color: #D5D5D5;  
}

td{
    height: 25px;
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
        <div width="150px">
        <h1>TeamBond App</h1>
        </div>
        <div>
        Login <a href="view_profile.php?user_name=<?=$user_name?>" style="color:white"><?=$user_name?></a>
        <a href="index.php"><button>Sign Out</button></a>
        </div>
    </header>
    <div class="container">
        <form role="form" action="add_post.php?user_name=<?=$user_name?>" enctype='multipart/form-data' method="post" autocomplete="off">
        <h4><button type="submit" class='btn btn-custom btn-lg btn-block'>Add</button></h4>
        </form>
        <table class="tbl" border="1" style="border-collapse:collapse; text-align:center;">
            <thead>
                <tr>
                    <th width="30px" height="35px">#</th>
                    <th width="400px">Title</th>
                    <th>Author</th>
                    <th>Date</th>
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
                echo "<td><a href='other_profile.php?user_name={$post_user_name}&user={$user_name}'><input type='text' name='user_name' value='{$post_user_name}' style='text-align:center; border:none; pointer-events:none; appearence:none;'></a></td>";
                echo "<td><input type='text' name='date' value='{$post_date}' style='text-align:center; border:none; pointer-events:none; appearence:none;'></td>";
                
                // echo "<td><button type='submit' name='delete' >x</button></td>";
                
                echo "</tr>";
                $idx++;
            }
            ?>
             </tbody>
        </table>
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