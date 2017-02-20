<?php
include("../res/x5engine.php");
$nameList = array("vyp","aaf","du6","xuy","fr8","l4y","dpx","uww","x5y","jct");
$charList = array("4","M","A","8","U","C","R","V","U","Y");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
