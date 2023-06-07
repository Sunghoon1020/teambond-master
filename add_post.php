<?
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
    <br>
    <form role="form" action="add_post_backend.php" method="post" autocomplete="off">
    <div>
        <table border="1" style="border-collapse:collapse;">
            <thead>
                <tr>
                    <th width="100px">Title</th>
                    <th width="300px" colspan="3"><input type="text" name="title" style="width:490px"></th>
                </tr>
                <tr>
                    <th width="100px">Author</th>
                    <th width="200px"><input type="text" name="user_name" value="<?=$username?>"></th>
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
        <button type="submit" name="submit">Submit</button>
    </div>
    </form>
    </body>
</html>