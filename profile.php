<?php include "./includes/admin_header.php";?>
<?php
    if(isset($_SESSION['user_name'])){
        $user_name = $_SESSION['user_name'];
        $query = "SELECT * FROM users WHERE user_name = '$user_name'";
        $select_user_profile_query = mysqli_query($connection , $query);

        while($row = mysqli_fetch_array($select_user_profile_query)){
            $user_id = $row['user_id'];
            $user_name = $row['user_name'];
            $user_password = $row['user_password'];
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $user_email = $row['user_email'];
            $user_image = $row['user_image'];
            $user_role = $row['user_role'];
        }
    }
?>


<?php
    

    if(isset($_POST['edit_user'])){
        $user_name = $_POST['user_name'];
        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_role = $_POST['user_role'];
        
        $query = "UPDATE users SET
        user_firstname = '$user_firstname',
        user_lastname = '$user_lastname',
        user_name = '$user_name',
        user_email = '$user_email',
        user_password = '$user_password',
        user_role = '$user_role'
        WHERE user_name = '$user_name' ";
    
        $update_user_query = mysqli_query($connection, $query);
        confirmQuery($update_user_query);
    
    }
    ?>


    <div id="wrapper">

        <!-- Navigation -->
        <?php include "./includes/admin_navigation.php";?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       <h1 class="page-header">
                            Welcome to admin
                            <small>Author</small>
                        </h1>
                    
                        
                        <form action="" method="post" enctype="multipart/form-data">


                        <div class="form-group">
                            <label for="user_firstname">First Name</label>
                            <input type="text" class="form-control" name="user_firstname" value="<?= $user_firstname?>">
                        </div>

                        <div class="form-group">
                            <label for="user_lastname">List Name</label>
                            <input type="text" class="form-control" name="user_lastname" value="<?= $user_lastname?>">
                        </div>


                        <div class="form-group">
                        <select name="user_role" id="">
                            <option value="subscriber"><?php echo $user_role?></option>
                            
                            <?php
                            if($user_role == 'admin'){
                                echo "<option value='subscriber'>subscritber</option>";
                            }else{
                                echo "<option value='admin'>Admin</option>";

                            }
                            ?>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="user_image">User Image</label>
                            <input type="file" name="image">
                        </div>

                        <div class="form-group">
                            <label for="user_name">Username</label>
                            <input type="text" class="form-control" name="user_name" value="<?= $user_name?>">
                        </div>

                        <div class="form-group">
                            <label for="user_email">Email</label>
                            <input type="text" class="form-control" name="user_email" value="<?= $user_email?>">
                        </div>


                        <div class="form-group">
                            <label for="user_password">Password</label>
                            <input type="password" class="form-control" name="user_password" value="<?= $user_password?>">
                        </div>




                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="edit_user" value="Update Profile">
                        </div>


                        </form>
                    
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->




<?php include "./includes/admin_footer.php";?>