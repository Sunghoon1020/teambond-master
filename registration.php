
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
    <!-- Page Content -->
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
.btn {
margin-top: 5px;
border: none;
background-color: #1c8adb;
color: #fff;
/* padding: 10px 10px; */
border-radius: 5px;
cursor: pointer;
}

.btn :hover {
	background-color: #39ace7;
	color: #000;
}.sign-box {
	width: 320px;
	height: 420px;
	background: #fff;
	color: #000;
 	top: 30%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	/* padding: 70px 30px; */
	border-radius: 10px;
}

.sign-box label {
	margin: 0;
	padding: 0;
	font-weight: bold;
	display: block;
}

.sign-box input {
	width: 100%;
	margin-bottom: 20px;
}

.sign-box input[type="text"], input[type="password"], input[type="email"] {
	border: none;
	border-bottom: 1px solid #000;
	background: transparent;
	outline: none;
	height: 40px;
	color: #000;
	font-size: 16px;
}

.sign-box button {
	/* margin-top: 30px; */
	border: none;
	background-color: #1c8adb;
	color: #fff;
	/* padding: 15px 20px; */
	border-radius: 5px;
	cursor: pointer;
}

.sign-box button:hover {
	background-color: #39ace7;
	color: #000;
}
.sr-only{
  text-align:left;
}

</style>
    <body>
    <header>
      <h1 style="text-align:center;">TeamBond</h1>
      
    </header>
    <main>
      <div class="sign-box container" id="login">
        <h1>Sign Up</h1>
        <form role="form" action="signup.php" method="post" autocomplete="off">
            <div class="form-group">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="user_name" id="username" class="form-control" placeholder="Enter Desired Username">
            </div>
            <div class="form-group">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="user_password" id="key" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="user_email" id="email" class="form-control" placeholder="somebody@example.com">
            </div>
            <div>
                <label for="first_name" class="sr-only">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter your First Name">
            </div>
            <div>
                <label for="last_name" class="sr-only">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter your Last Name">
            </div>
            <div>
                <label for="address" class="sr-only">Address</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Enter your Address">
            </div>
            <div>
                <label for="city" class="sr-only">City</label>
                <input type="text" name="city" id="city" class="form-control" placeholder="Enter your City">
            </div>
            <button type="submit" name="submit" id="btn-login" class="btn  btn-block">Submit</button>
            <a href="index.php"><button type="button" name="submit" id="btn-login" class="btn  btn-block">Back</button></a>


        </form>
      </div>

      <div id="profile">
        Welcome, Admin!
      </div>
    </main>

    <br>
    
    <footer class="footer">
      <p>&copy; 2023 Westcliff University</p>
    </footer>
  </body>
</html>
