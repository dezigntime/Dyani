<html>
<head><title>Actors</title>

<style type=text/css">


textarea {
width: 300px;
height: 10em;
}

</style>

</head>
<body>
    
    
    
<form action="test.php" method="post">

<table cellspacing="5" cellpadding="5" border="0">
<tbody>
  <tr>
     <td valign="top">
         <strong>My First Name</strong>

      <td valign="top">
         <input type="text" name="formFirstname" maxlength="50">
      </td>

     <td valign="top">
         <strong>Last Name</strong>

      <td valign="top">
         <input type="text" name="formFirstname" maxlength="50">
      </td>
</tr>
</table>

<!--*gender-->
 <input checked type="radio" name="gender" value="male" class="radiobtn" id="mcont" onClick="javascript:male();" /><strong>Male</strong>

<input  type="radio" name="gender" value="female" class="radiobtn" id="fcont" onClick="javascript:female();" /><strong>Female</strong><br /><br />


<strong>Experience:</stong><br />
 <textarea name="comments" cols="40" rows="5"></textarea><br /><br />

<strong>Special Skills:</strong><br />
 <textarea name="comments" cols="40" rows="5"></textarea>

<p>For uploads, files with special characters in the name may cause <br />
errors, so rename them if you encounter problems.<br /></p>

<strong>Select an image (JPG only, 2 MB limit):</strong><br />
<input type="file" name="formModel">

<input type="submit" name="formSubmit" value="Submit"><br />

</form>
</body>
</html>