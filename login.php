<?php
// include "./Backend/db_connect.php";
// include "./Backend/backend-login.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Flower Sale - Login</title>
    <link rel="stylesheet" href="style/styles.css" />
    <style>
      .login-form {
        margin: 20px;
        max-width: 400px;
        margin-left: auto;
        margin-right: auto;
      }

      .login-form label {
        display: block;
        margin-bottom: 10px;
        text-align: left;
        font-weight: bold;
      }

      .login-form input {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      .login-form button {
        padding: 10px 20px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          <li><a href="signup.php">Signup</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav>
    </header>
    <main>
     <form action="backend-login.php" method="post">
      <div class="login-form">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
          <label for="email">Email:</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Your email"
            required
          />
          <label for="password">Password:</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Your password"
            required
          />
          <button type="submit">Login</button>
      </div>
    </form>
    </main>

    <footer>
      <p>2024 Flower Sale</p>
      <p>
        <a href="#">Quick Links</a> |
        <a href="#">Follow Us</a>
      </p>
    </footer>
  </body>
</html>
