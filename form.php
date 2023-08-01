<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "noreply@myfarmconnect.in";
    $email_subject = "Contact Us Form";

 
     
 
    $name = $_POST['firstname'];
    $email = $_POST['email_id'];
    $phoneno=$_POST['phone'];
    $message=$_POST['message'];
 
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "email: ".clean_string($email)."\n";
    $email_message .= "Phone: ".clean_string($phoneno)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
'Reply-To: '.'noreply@myfarmconnect.in'."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
header('Location: ./contact.html');

 
}
?>
