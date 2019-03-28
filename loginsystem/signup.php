<?php
  require "header.php";
?>

<main>
  <h1>signup</h1>
  <form class="" action="includes/signup.php" method="post">
    <input type="text" name="uid" placeholder="usermane" />
    <input type="text" name="mail" placeholder="email" />
    <input type="password" name="pwd" placeholder="password" />
    <input type="password" name="pwd-repeat" placeholder="repeat password" />
    <button type="submit" name="signup">Submit</button>
  </form>

</main>

<?php
  require "footer.php";
?>
