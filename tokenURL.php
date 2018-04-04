<?php

// TOKEN URL PAGE
//   Here is a token URL page which handles the return from the auth_info
//   call to Janrain servers, sets the cookie session data, and redirects back to
//   the index page.

  require('helpers.php');
  ob_start();
// ASSEMBLE THE TOKEN AND API KEY TO MAKE THE AUTH_INFO CALL
  $api_key = trim(file_get_contents('./var/php_include/api_key'));
  $social_login_pro = false;
  $token = $_POST['token'];
  if ($token) {
      $post_data = array(
          'token' => $token,
          'apiKey' => $api_key,
          'format' => 'json'
      );
      if ($social_login_pro) {
          $post_data['extended'] = 'true';
      }
      $curl = curl_init();
      $url = 'https://rpxnow.com/api/v2/auth_info';
      $result = curl_helper_post($curl, $url, $post_data);
      if ($result == false) {
          curl_helper_error($curl, $url, $post_data);
          die();
      }
      curl_close($curl);

    // PARSE JSON RESPONSE:
      $auth_info = json_decode($result, true);
      echo "our auth_info status is: " . $auth_info['stat'];
      if ($auth_info['stat'] == 'ok') {
          if ($social_login_pro) {
              include('social_login_pro_examples.php');
          }
          $user = $auth_info['profile']['name']['givenName'];
          $photo = $auth_info['profile']['photo'];
        // UPDATE COOKIE WITH USER DATA
          session_start();
          $_SESSION['username'] = $user;
          $_SESSION['photo'] = $photo;
          session_write_close();
        // RETURN USER INFO TO THE INDEX PAGE
          header("Location: index.php");
          // header("Location: http://www.amandaryman.com/apitest/index.php");
          die();
      } else {
          output('An error occurred', $auth_info);
          output('result', $result);
      }
  } else {
      echo 'No authentication token.';
  }
  $debug_out = ob_get_contents();
  ob_end_clean();
?>
