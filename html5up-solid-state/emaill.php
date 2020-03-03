<?php

$name = echo $_POST['name'];
$email = echo $_POST['email'];
$msg = echo $_POST['message'];
$sub = echo $_POST['subject'];

mail("devinwallace@protonmail.com",$sub,$msg);
?>
