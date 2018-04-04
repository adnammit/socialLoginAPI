<!-- LET'S SET SOME SIMPLE USER VARIABLES WITH A COOKIE -->
<?php
  session_start();
  if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
  }
  if (isset($_SESSION['photo'])) {
    $photoURL = $_SESSION['photo'];
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/output.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <title>welcome</title>
  </head>
  <body>

    <header>
    <!-- USER WELCOME -->
      <h1>
        <a href="http://www.amandaryman.com">
          amandaryman.COM
        </a>
      </h1>
    <!-- IF NO USER, OFFER SIGN IN -->
      <nav>
        <a class="janrainEngage" href="#">
          <?php
            if (!isset($user)) {
              echo "Log in";
            }
          ?>
        </a>
      <!-- IF USER, OFFER SIGN OUT AND DISPLAY AVATAR-->
        <?php
          if (isset($user)) {
            echo "<div id='logout'>";
            echo "<a href='logout.php'>Log out</a>";
            if (isset($photoURL)) {
              echo "<img src = " . htmlspecialchars($photoURL) . " id='avatar'>";
            }
            echo "</div";
          }

        ?>
        </div>
      </nav>
    </header>

    <div id="wrapper">

      <section>
        <h3>hello<?php if (isset($user)) {
          echo ", " . htmlspecialchars($user);}?>!</h3>

      <!-- HERE IS AN IPSUM FOR YOU TO ENJOY -->


          <?php
            if (isset($user)){
              echo "<div id='ipsum'>";
              echo "<h4>";
              echo "Few can name a tamest sheep that isn't a fatter lier. Extending this logic, somber polishes show us how basketballs can be crayons. The oxygen is an interactive. What we don't know for sure is whether or not an oboe is a cover's playground.";
              echo "<br><br>";
              echo "However, the gloomful actress comes from an oafish playground. Some posit the abscessed bed to be less than outback. A kangaroo is a drawer's goose. In modern times authors often misinterpret the mother as a spryer sandra, when in actuality it feels more like a dewy rise.";
              echo "</h4>";
              echo "<a href='http://metaphorpsum.com/'>Make your own Ipsum, metaphorically speaking.</a>";
              echo "<div id=</div>";
            } else {
              echo "<h4>Sign in to see what's up.</h4>";
            }
          ?>

        </div>
      </section>

      <footer>
        <a href="mailto:hello@amandaryman.com">
            <img src="img/email.png" alt="email me" class="social-icon">
        </a>
        <p>&copy; 2016 fuzzybuttons</p>
      </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
