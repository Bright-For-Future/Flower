<!DOCTYPE html>
<html>
  <head>
    <title>Flower Sale - Contact Us</title>
    <link rel="stylesheet" href="style/styles.css" />
    <style>
      .contact-form {
        margin: 20px;
        max-width: 400px;
        margin-left: auto;
        margin-right: auto;
      }

      .contact-form label {
        display: block;
        margin-bottom: 10px;
        text-align: left;
        font-weight: bold;
      }

      .contact-form input,
      .contact-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      .contact-form button {
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
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form>
          <label for="name">Name:</label>
          <input
            type="text"
            id="name"
            name="name"
            placeholder="Your name"
            required
          />

          <label for="email">Email:</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Your email"
            required
          />

          <label for="message">Message:</label>
          <textarea
            id="message"
            name="message"
            rows="4"
            placeholder="Your message"
            required
          ></textarea>

          <button type="submit">Submit</button>
        </form>
      </div>
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
