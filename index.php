
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
      <h1 style="text-align:center;">TeamBond</h1>
    </header>
    <main>
      <div id="home">
      <h2>Welcome!</h2>
        <h3 style="text-align:center;">Our mission is to build a vibrant and engaging digital space designed 
        <h3 style="text-align:center;">to foster a sense of company and boost morale within the organization. </h3>
        <h3 style="text-align:center;">You can post anything you like here.</h3>
      </div>

      <div class="login-box" id="login" style="height:100%">
        <h1>Login</h1>

        <form  role="form" action="login.php" method="post" name="login">
          <label for="username">Username:</label>
          <input type="text" id="username" name="user_name" placeholder="Enter username" required>
    
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password" placeholder="Enter password" required>
    
          <button type="submit" name="login" id="login-btn">Login</button>
          <a href="./registration.php"><button type="button">Sign up</button></a>
        </form>
      </div>
    </main>
    
    <footer class="footer">
      <p>&copy; 2023 Westcliff University</p>
    </footer>
  </body>
</html>
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
  .login-box {
    width: 320px;
    height: 420px;
    background: #fff;
    color: #000;
    top: 80%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 60px 30px;
    border-radius: 10px;
  }
</style>