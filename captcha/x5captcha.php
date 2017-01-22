<?php
include("../res/x5engine.php");
$nameList = array("zyt","2n6","2ae","a8a","hge","6a6","rmh","8ur","a5f","dkt");
$charList = array("Z","Z","P","H","H","2","8","E","5","5");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
