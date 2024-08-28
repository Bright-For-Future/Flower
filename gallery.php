<!DOCTYPE html>
<html>
  <head>
    <title>Flower Sale - Gallery</title>
    <link rel="stylesheet" href="style/styles.css" />
    <style>
      .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 20px;
      }
      .gallery img {
        width: 200px;
        height: 200px;
        margin: 10px;
        object-fit: cover;
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
      <div class="gallery">
        <img src="Images/image1.jpeg" alt="Flower 1" />
        <img src="Images/image2.jpg" alt="Flower 2" />
        <img src="Images/image3.jpg" alt="Flower 3" />
      </div>
      <div class="gallery">
        <img src="Images/image1.jpeg" alt="Flower 1" />
        <img src="Images/image2.jpg" alt="Flower 2" />
        <img src="Images/image3.jpg" alt="Flower 3" />
      </div>
      <div class="gallery">
        <img src="Images/image1.jpeg" alt="Flower 1" />
        <img src="Images/image2.jpg" alt="Flower 2" />
        <img src="Images/image3.jpg" alt="Flower 3" />
      </div>
    </main>
    <footer>
      <p> 2024 Flower Sale</p>
      <p>
        <a href="#">Quick Links</a> |
        <a href="#">Follow Us</a>
      </p>
    </footer>
  </body>
</html>
