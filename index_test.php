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
    <main>
      <div id="home">
        <h2>Welcome!</h2>
        <p>This is the home page of TeamBond App.</p>
      </div>

      <div class="login-box" id="login">
        <h1>Login</h1>
        <form action="login.php" method="post" name="login">
          <label for="username">Username:</label>
          <input type="text" id="username" name="user_name" placeholder="Enter username" required>
    
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password" placeholder="Enter password" required>
    
          <button type="submit" name="login" id="login-btn">Login</button>
          <a href="./registration.php"><button type="button">Sign up</button></a>
        </form>
      </div>

      <div id="profile">
        Welcome, Admin!
      </div>
    </main>
  
    
    <footer>
      <p>&copy; 2023 Westcliff University</p>
    </footer>
  </body>
</html>
