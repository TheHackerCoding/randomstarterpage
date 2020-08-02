<?php
function animrow() {
      echo "<div class='animrow'>
      &nbsp;
    </div>";
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/main.css">
  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#ecefe4">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#ecefe4">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#ecefe4">
  <title></title>
</head>

<body>
  <div id="bannersection">
    <div class="bannercontent">
      <h1>Do you want your idea to have a website created good?</h1>
      <p>Well, you have come to the right place.</p>
    </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="column">
        <h2>We have experience with what you need help with.</h2>
      </div>
      <div class="column">
        <h2>That includes HTML5, CSS, JavaScript, and other languages.</h2>
      </div>
    </div>
  </div>
  <div class="invertContent">
    <h3>Contact Us</h3>
    <form action="./assets/form/formaction.php" method="post">
      <div class="formgroup">
        <label for="Name">Name</label>
        <input type="text" name="name" id="email" required>
      </div>
      <div class="formgroup">
        <label for="Email">Email</label>
        <input type="email" name="email" id="email" required>
      </div>
      <div class="formgroup">
        <label for="Messaage">Messaage</label>
        <textarea name="message" id="message" cols="30" rows="9" required></textarea>
      </div>
      <div class="formgroup">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
  <div class="content">
    <h3>Originally made and created by <a href="https://github.com/TheHackerCoding"> TheHackerCoding</a></h3>
  </div>
</body>

</html>