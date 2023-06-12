<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TeamBond</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <body>
        <header>
        <h1>TeamBond App</h1>
        </header>
        <table border="1" style="border-collapse:collapse;">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Title</td>
                </tr>
            </thead>
            <tbody>
                    <?
                    $idx = 0;
                    ?>
                <tr>
                    <td><? echo $idx?></td>
                    <td><? echo $title?></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>