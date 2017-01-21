<?php
include("../res/x5engine.php");
$nameList = array("etj","5w6","n4z","l5p","hzp","7t3","jth","pzl","rtf","yd2");
$charList = array("H","P","4","N","8","7","V","L","8","X");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
