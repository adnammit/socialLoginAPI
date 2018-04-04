<?php

// LOGOUT PAGE
//   Here is a simple landing page to process the user's logout, unset the
//   session data, and redirect back to the index page.

  session_start();
  unset($_SESSION['username']);
  unset($_SESSION['photo']);
  header("Location: index.php");
?>
