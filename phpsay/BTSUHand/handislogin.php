<?php
require_once("../global.php");
if ( $loginInfo['uid'] > 0 )
{
	$Iuid=$loginInfo['uid'];
	$Inickname=$loginInfo['nickname'];
	$Handislogin="1";
if($HandUE=="1"){
	$Huejg=handdl($Uuser,'SDADADAA',3);
	if($Huejg==$Iuid){
		$HandUEYZ="1";
	}else{
		$HandUEYZ="2";
	}
}else{
    $HandUEYZ="2";
	}
}else{
	$Handislogin="2";
	$HandUEYZ="2";
}