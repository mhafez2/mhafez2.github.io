<?php
include("../res/x5engine.php");
$nameList = array("twg","gj6","4m4","xwg","glj","rfl","7a6","5yw","sgx","7ef");
$charList = array("Z","N","4","U","L","Y","5","3","A","4");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
