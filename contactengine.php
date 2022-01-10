<?php

$EmailFrom = "fr.peixoto@outlook.com";
$EmailTo = "fr.peixoto@outlook.com";
$Name = $_POST['Name']; 
$Email = $_POST['Email']; 
$Message = $_POST['Message']; 


// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
// redirect to success page 
if (mail($EmailTo, $Subject, $Body, $EmailFrom)){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>