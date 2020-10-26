<!DOCTYPE html>

<?php
if(isset($_POST['submit'])){
$to = $_POST['temail'];
if(!filter_var($to, FILTER_VALIDATE_EMAIL)){
echo("enter the correct email");}
else{
$from = $_POST['femail'];
if(!filter_var($from, FILTER_VALIDATE_EMAIL)){
echo("enter the correct email");}
else {
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$message = $fname."".$lname."\n".$_POST['message'];
$message = wordwrap($message, 70);
$headers = "From:" . $from;
$subject = "form submission";
mail($to , $subject, $message, $headers);
echo("mail send");
}
}
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
 
<body>
<form action="email.php" method="post">
<table align="center">
<tr>
<td>Name:</td>
<td><input type="text" name="fname" placeholder="first name">
<input type="text" name="lname" placeholder="last name"></td>
</tr>
<tr><td>To:</td>
<td><input type ="email" name="temail" placeholder="example@example.com"></td>
</tr><br><br>
<tr>
<td>From:</td>
<td><input type="email" name="femail" placeholder="example@example.com"></td></tr>
<tr>
<td>Message:</td>
<td><textarea cols="40" rows="5" placeholder="Enter your useful message here" name="message"></textarea></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="send"></td>
</tr>
</table>
</form>
</body>
</html>