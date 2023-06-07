<?php
include "db.php";

?>

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
    <div>
        <h4><a href="add_post.php"><button type="button">Add</button></a></h4>

        <form role="form" action="delete.php" method="post" autocomplete="off">
        <table border="1" style="border-collapse:collapse;">
            <thead>
                <tr>
                    <th width="15px">#</th>
                    <th width="300px">Title</th>
                    <th>Author</th>
                    <th>Date</th>
                </tr>
            
            </thead>
            <tbody>
            <?php
            $query = "SELECT * FROM post order by title";
            $post_rs = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($post_rs)){
                $user_name = $row['user_name'];
                $title = $row['title'];
                $contents = $row['contents'];
                $date = $row['date'];

                
                echo "<tr>";
                echo "<td>1</td>";
                echo "<td><input type='text' name='title' value='{$title}' style='text-align:center; border:none; pointer-events:none; appearence:none;'></td>";
                echo "<td><input type='text' name='user_name' value='{$user_name}' style='text-align:center; border:none; pointer-events:none; appearence:none;'></td>";
                echo "<td><input type='text' name='date' value='{$date}' style='text-align:center; border:none; pointer-events:none; appearence:none;'></td>";
                
                echo "<td><button type='submit' name='delete' >x</button></td>";
                
                echo "</tr>";

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

    </body>
</html>