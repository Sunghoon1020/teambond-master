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
  
);

$user_name = $_GET['user_name'];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
<style>

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
    </head>
    <body>
    <header>
      <h1>TeamBond App</h1>
    </header>
    <br>
    <form role="form" action="add_post_backend.php" method="post" autocomplete="off">
    <div class="container">
        <table border="1" style="border-collapse:collapse;">
            <thead>
                <tr>
                    <th width="100px">Title
                    </th>
                    <th width="300px" colspan="3"><input type="text" name="title" style="width:490px"></th>
                </tr>
                <tr>
                    <th width="100px">Author</th>
                    <th width="200px"><input type="text" name="user_name" value="<?=$user_name?>" style="border:none; pointer-events: none; appearance: none;"></th>
                    <th width="100px">Date</th>
                    <th width="200px"><input type="date" name="date"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4">
                    <textarea row="5" cols="75" name="contents"></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="main.php?user_name=<?=$user_name?>"><button type="button" name="back">back</button></a>

        <button type="submit" name="submit">Submit</button>

    </div>
    </form>
    <footer class="footer">
      <p>&copy; 2023 Westcliff University</p>
    </footer>
    </body>
</html>