<?php
include("../res/x5engine.php");
$nameList = array("244","yeu","cul","ggr","vpa","6n5","zpf","rge","v6p","ecs");
$charList = array("G","E","F","Y","L","D","N","K","M","F");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
