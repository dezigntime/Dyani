<?php


// email fields: to, from, subject, and so on
$to = "dyanientertainment@gmail.com";
$from = $_POST["email"];
$subject ="DYANI Entertainment Model Submission"; 

$headers = "From: $from";


// var_dump($_POST);

//format the message here
$message="
<html>
<body>
<h1>DYANI Entertainment Model Form Submission</h1>
 <table border='1'>
 	<tr>
 		<td> First Name: </td>
 		<td> ". $_POST['fname'] ."</td>
 	</tr>
 	<tr>
 		<td> Last Name: </td>
 		<td>".$_POST['lname']."</td>
 	</tr>
 	<tr>
 		<td> Address: </td>
 		<td>".$_POST['address']."</td>
 	</tr>
 	<tr>
 		<td> Apt: </td>
 		<td>".$_POST['apt']."</td>
 	</tr>
 	<tr>
 		<td> Phone: </td>
 		<td>".$_POST['phone']."</td>
 	</tr>
 	<tr>
 		<td> Country: </td>
 		<td>".$_POST['country']."</td>
 	</tr>
 	<tr>
 		<td> Zip: </td>
 		<td>".$_POST['zip']."</td>
 	</tr>
 	<tr>
 		<td> City: </td>
 		<td>".$_POST['city']."</td>
 	</tr>
 	<tr>
 		<td> State: </td>
 		<td>".$_POST['state']."</td>
 	</tr>
 	<tr>
 		<td> Gender: </td>
 		<td>".$_POST['gender']."</td>
 	</tr>
 	<tr>
 		<td> Birthday: </td>
 		<td>".$_POST['bdmonth']."/".$_POST['bdday']."/".$_POST['bdyear']."</td>
 	</tr>
 	<tr>
 		<td> Why I want to Model: </td>
 		<td>".$_POST['question']."</td>
 	</tr>
 	<tr>
 		<td> Units: </td>
 		<td>".$_POST['units']."</td>
 	</tr>
 	<tr>
 		<td> Height: </td>
 		<td>".$_POST['height']."</td>
 	</tr>
 	<tr>
 		<td> Height 2: </td>
 		<td>".$_POST['height2']."</td>
 	</tr>
 	<tr>
 		<td> Weight: </td>
 		<td>".$_POST['weight']."</td>
 	</tr>
 	<tr>
 		<td> Length: </td>
 		<td>".$_POST['length']."</td>
 	</tr>
 	<tr>
 		<td> Chest: </td>
 		<td>".$_POST['chest']."</td>
 	</tr>
 	<tr>
 		<td> Cup: </td>
 		<td>".$_POST['cup']."</td>
 	</tr>
 	<tr>
 		<td> Hips: </td>
 		<td>".$_POST['hips']."</td>
 	</tr>
 	<tr>
 		<td> Hips 2: </td>
 		<td>".$_POST['hips2']."</td>
 	</tr>
 	<tr>
 		<td> Waist: </td>
 		<td>".$_POST['waist']."</td>
 	</tr>
 	<tr>
 		<td> Waist 2: </td>
 		<td>".$_POST['waist2']."</td>
 	</tr>
 	<tr>
 		<td> Shoe: </td>
 		<td>".$_POST['shoe']."</td>
 	</tr>
 	<tr>
 		<td> Eye Color: </td>
 		<td>".$_POST['eyecolor']."</td>
 	</tr>
 	<tr>
 		<td> Hair Color: </td>
 		<td>".$_POST['haircolor']."</td>
 	</tr>
  </table>
</body>
</html>";


// echo $message;





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

?>