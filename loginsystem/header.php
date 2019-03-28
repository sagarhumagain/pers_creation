<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login system</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header id="header">
      <nav class="nav-header-main">
        <a  class="header-logo" href="#"> <img src="images/logo.png" alt=""> </a>
      </nav>
      <ul class="nav-bar">
        <li>
          <a href="index.html"> home</a>
          <a href="#"> contact us</a>
          <a href="#"> about</a>
          <a href="#">portfolio</a>
        </li>
      </ul>

      <div class="header-login">
        <form action="include/login.php" method="post">
          <input type="text" name="mailuid" placeholder="usermane/email..." />
          <input type="password" name="pdw" placeholder="password" />
          <button type="submit" name="login">login</button>
        </form>
        <a href="signup.php">sign up</a>

        <form action="includes/logout.html" method="post">
          <button type="submit" name="logout">logout</button>
        </form>
      </div>
    </header>
  </body>
</html>
