<!DOCTYPE html>
<html>
  <head>
    <title>
      Thanks for Joining Our Email List!
    </title>
    <link href="styles.css" rel="stylesheet">
  </head>
  <body>
    
    <?php
      $firstname = $_POST['firstname'];
      $email = $_POST['email'];
      echo "<p>Thank you for joining our Email List, $firstname!</p>\n";
      echo "<p>Emails will be sent to $email.</p>\n";
    
    ?>
    
  </body>
</html>
