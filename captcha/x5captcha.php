<?php
include("../res/x5engine.php");
$nameList = array("htj","x7w","r4e","nx2","6dy","nut","ncs","36n","nhw","2mn");
$charList = array("A","D","7","A","S","J","R","A","G","7");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
