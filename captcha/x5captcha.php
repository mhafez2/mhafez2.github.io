<?php
include("../res/x5engine.php");
$nameList = array("ury","vhg","ffz","wfg","lhr","pu4","4v8","mc5","acl","lj2");
$charList = array("A","W","M","H","M","A","E","D","3","T");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
