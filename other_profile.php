<?php
include "db.php";

$post_user_name = $_GET['user_name'];
$user_name = $_GET['user'];
?>

<style>
input {
    border:none; 
    pointer-events: none; 
    appearance: none;
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

<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
    <!-- Page Content -->
    <body>
    <header>
      <h1>TeamBond App</h1>
    </header>
    <main>
    <form role="form" action="main.php?user_name=<?=$user_name?>" method="post" autocomplete="off">
    <h2 style="text-align:center;">View Profile</h2>

            <?php
            $query = "SELECT * from users where user_name = '$post_user_name'";

            $rs = mysqli_query($connection, $query);
                if($row = mysqli_fetch_assoc($rs)){
                $load_user_id = $row['user_id'];
                $load_user_password = $row['user_password'];
                $load_user_email = $row['user_email'];
                $load_user_name = $row['user_name'];
                $load_first_name = $row['first_name'];
                $load_last_name = $row['last_name'];
                $load_address = $row['address'];
                $load_city = $row['city'];
                
            echo "<div class='sign-box' id='login>";
            echo "<h1><input type='text' name='user_name' id='user_name' value='{$load_user_name}' class='form-control'></h1>";
            echo "<div class='form-group'>";
            echo "<label for='username' class='sr-only'>Username</label>";
            echo "<input type='text' name='user_name' id='user_name' value='{$load_user_name}' class='form-control'>";
            echo "</div>";
            echo "<div class='form-group'>";
            echo "<label for='email' class='sr-only'>Email</label>";
            echo "<input type='email' name='user_email' id='email' value='{$load_user_email}' class=form-control >";
            echo "</div>";
            echo "<div>";
            echo "<label for='first_name' class='sr-only'>First Name</label>";
            echo "<input type='text' name='first_name' id='first_name' value='{$load_first_name}' class='form-control'>";
            echo "</div>";
            echo "<div>";
            echo "<label for='last_name' class='sr-only'>Last Name</label>";
            echo "<input type='text' name='last_name' id='last_name' value='{$load_last_name}' class='form-control'>";
            echo "</div>";
            echo "<div>";
            echo "<label for='address' class='sr-only'>Address</label>";
            echo "<input type='text' name='address' id='address' value='{$load_address}' class='form-control'>";
            echo "</div>";
            echo "<div>";
            echo "<label for='city' class='sr-only'>City</label>";
            echo "<input type='text' name='city' id='city' value='{$load_city}' class='form-control'>";
            echo "</div>";
            echo "<button type='submit' name='submit' id='btn-login' class='btn btn-custom btn-lg btn-block'>Back</button>";
            echo "</div>";
            }?>
        </form>



    </main>
    <br>
    <footer class="footer">
      <p>&copy; 2023 Westcliff University</p>
    </footer>
  </body>
</html>

