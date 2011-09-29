<html><body>
<?php
$primaryEmail = "info@dyanientertainment.com";
//$to = "dyanientertainment@gmail.com";
$to = "jjackson@dynamicwebdezign.com,esalcido@dynamicwebdezign.com";
 $subject = "Hi!";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$primaryEmail . "\r\n";
 
 $body = "Hi,\n\nHi, this is a test. if you recieved this message, can you please reply to esalcido@dynamicwebdezign.com to confirm?  Thank you.";
 
 if (mail($to, $subject, $body, $headers)) {
   echo("<p>Message successfully sent!</p>");
  } 
  else {
   echo("<p>Message delivery failed...</p>");
  }

$first = $_POST['FirstName'];
$last = $_POST['LastName'];

echo "You ordered ". $quantity . " " . $item . ".<br />";
echo "Thank you for submitting your info(TEST)!";

?>
</body></html>