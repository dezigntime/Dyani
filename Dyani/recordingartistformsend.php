<?php


// email fields: to, from, subject, and so on
// $to = "dyanientertainment@gmail.com";
$to = "jjackson@dynamicwebdezign.com";
$from = $_POST["email"];
$subject ="DYANI Entertainment Actor Submission"; 

$headers = "From: $from";


//   var_dump($_POST);

//format the message here
$message="
<html>
<body>
<h1>DYANI Entertainment Recording Artist Form Submission</h1>
 <table border='1'>
 	<tr>
 		<td> Artist Name: </td>
 		<td> ". $_POST['artistname'] ."</td>
 	</tr>
 	<tr>
 		<td> Music Genre: </td>
 		<td>".$_POST['musicgenre']."</td>
 	</tr>
 	<tr>
 		<td> Direct link to sample your music: </td>
 		<td>".$_POST['theremusiclink']."</td>
 	</tr>
 	<tr>
 		<td> Reverb Nation Link: </td>
 		<td>".$_POST['reverbnationlink']."</td>
 	</tr>
 	<tr>
 		<td> Whats your role in the band: </td>
 		<td>".$_POST['roleinband']."</td>
 	</tr>
 	<tr>
 		<td> Additional Information about the band.: </td>
 		<td>".$_POST['additionalinforoleinband']."</td>
 	</tr>
 	<tr>
 		<td> Email Address: </td>
 		<td>".$_POST['email']."</td>
 	</tr>
  </table>
</body>
</html>";

//  echo $message;

// boundary 
$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
// headers for attachment 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
// multipart boundary 
$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
$message .= "--{$mime_boundary}\n";
 if($_FILES["fileAttach"]["name"] != "")
    {
            $data = chunk_split(base64_encode(file_get_contents($_FILES["fileAttach"]["tmp_name"])));
            $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\" ". $_FILES["fileAttach"]["name"] . "\"\n" . 
            "Content-Disposition: attachment;\n" . " filename=\" ".$_FILES["fileAttach"]["name"] . "\"\n" . 
            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
            $message .= "-{$mime_boundary}\n";
    }


    header('Location: thankyou.html');
// send
$ok = @mail($to, $subject, $message, $headers); 
if ($ok) { 
    echo "<p>Thank for for signing up.</p>"; 
} else { 
    echo "<p>Please select the back button and try filling out your form again</p>"; 
}

header('Location: thankyou.html');

?>
<html>
<body>
</body>
</html>