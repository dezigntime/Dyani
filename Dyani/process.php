<html><body>
<?php
//$primaryEmail = "info@dyanientertainment.com";
//$to = "dyanientertainment@gmail.com";
$to = "esalcido@dynamicwebdezign.com,jjackson@dynamicwebdezign.com";
 $subject = "Hi!";

$headers  = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .= 'From: '.$primaryEmail . "\r\n";
//$headers .= "Reply-To: Some One <someone@mydomain.com>\r\n";
$headers .= "Return-Path: Some One <ezoloft@gmail.com>\r\n";
$headers .= "From: Some One <ezoloft@gmail.com>\r\n";
$headers .= "Organization: My Organization\r\n"; 
$headers .= "Content-Type: multipart/mixed;\r\n"; 
 
 
 
// $body = "Hi,\n\nHi, this is a test. \r\n";
 
 

//Form 1
$first = $_POST['FirstName'];
$last = $_POST['LastName'];
$streetAdress= $_POST['Address1'];
$city= $_POST['City'];
$state= $_POST['LastName'];
$zipCode= $_POST['Zip'];
$country= $_POST['LastName'];
$email= $_POST['PrimaryEmail'];
$phone= $_POST['Phone'];



//FORM 2
$Guardian= $_POST['Guardian'];
$WhereScouted= $_POST['WhereScouted'];
$RepresentedYes= $_POST['RepresentedYes'];
$RepresentedNo= $_POST['RepresentedNo'];
$Notes= $_POST['Notes'];
$Birthdate= $_POST['Birthdate'];
$rdoFemale= $_POST['rdoFemale'];
$rdoMale= $_POST['rdoMale'];




$height = $_POST['height'];
$bust = $_POST['bust'];
$cup = $_POST['cup'];
$waist = $_POST['waist'];
$hips = $_POST['hips'];
$dress = $_POST['dress'];
$shoes = $_POST['shoes'];
$hair = $_POST['hair'];
$eyes = $_POST['eyes'];
$suit = $_POST['suit'];
$suitLength = $_POST['suitLength'];
$shirt = $_POST['shirt'];
$shirtSleeve = $_POST['shirtSleeve'];
$inseam = $_POST['inseam'];



  
/**/





//FORM3

//echo "this is uploadFile1: ".$_FILES['uploadFile1']['name'];
//FILE UPLOAD HANDLER=-------====================================================
 // generate a random string to be used as the boundary marker
   $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";
//   
	$headers = "From: Some One <lfj77649@p3slhssl30.shr.phx3.secureserver.net>\r\n";
   $headers  .= 'MIME-Version: 1.0' . "\r\n";
   $headers .= "Return-Path: Some One <ezoloft@gmail.com>\r\n";

//   
   
$headers = "Content-Type: multipart/mixed;\r\n"; 
   // now we'll build the message headers
   $headers .= " boundary=\"{$mime_boundary}\"";

   // here, we'll start the message body.
   // this is the text that will be displayed
   // in the e-mail
   $body="This is an example\r\n";
   
 $body.="first name: ".$first."\r\n";
$body.="last name: ".$last."\r\n";
$body.="address: ".$streetAdress."\r\n";
$body.="city: ".$city."\r\n";
$body.="zip: ".$zipCode."\r\n";

$body.="Guardian: ".$Guardian."\r\n";
$body.="Where Scouted: ".$WhereScouted."\r\n";
$body.="RepresentedYes: ".$RepresentedYes."\r\n";
$body.="RepresentedNo: ".$RepresentedNo."\r\n";
$body.="Notes: ".$Notes."\r\n";
$body.="Birthdate: ".$Birthdate."\r\n";
$body.="rdoFemale: ".$rdoFemale."\r\n";
$body.="rdoMale: ".$rdoMale."\r\n";


   

   // next, we'll build the invisible portion of the message body
   // note that we insert two dashes in front of the MIME boundary 
   // when we use it
   $body .= "This is a multi-part message in MIME format.\n\n" .
      "--{$mime_boundary}\n" .
      "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
      "Content-Transfer-Encoding: 7bit\n\n" .
   $body . "\n\n";

   // now we'll process our uploaded files
   foreach($_FILES as $userfile){
      // store the file information to variables for easier access
      $tmp_name = $userfile['tmp_name'];
      $type = $userfile['type'];
      $name = $userfile['name'];
      $size = $userfile['size'];
echo "file name: ".$tmp_name;
      // if the upload succeded, the file will exist
      if (file_exists($tmp_name)){

         // check to make sure that it is an uploaded file and not a system file
         if(is_uploaded_file($tmp_name)){
 	
            // open the file for a binary read
            $file = fopen($tmp_name,'rb');
 	
            // read the file content into a variable
            $data = fread($file,filesize($tmp_name));

            // close the file
            fclose($file);
 	
            // now we encode it and split it into acceptable length lines
            $data = chunk_split(base64_encode($data));
         }
 	
         // now we'll insert a boundary to indicate we're starting the attachment
         // we have to specify the content type, file name, and disposition as
         // an attachment, then add the file content.
         // NOTE: we don't set another boundary to indicate that the end of the 
         // file has been reached here. we only want one boundary between each file
         // we'll add the final one after the loop finishes.
         $body .= "--{$mime_boundary}\n" .
            "Content-Type: {$type};\n" .
            " name=\"{$name}\"\n" .
            "Content-Disposition: attachment;\n" .
            " filename=\"{$fileatt_name}\"\n" .
            "Content-Transfer-Encoding: base64\n\n" .
         $data . "\n\n";
      }
   }
   // here's our closing mime boundary that indicates the last of the message
   $body.="--{$mime_boundary}--\n";
 




if (mail($to, $subject, $body, $headers,'-p3slhssl30.shr.phx3.secureserver.net')) {
   echo("<p>Message successfully sent!</p>");
  } 
  else {
   echo("<p>Message delivery failed...</p>");
  }


echo "Thank you for submitting your info(TEST)!";


?>
</body></html>