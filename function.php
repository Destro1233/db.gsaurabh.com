<?php
function movePage($num,$url){
   static $http = array (
  	   100 => "Verified User Continue",
	   101 => "Invalid Password"
	   );
	header($http[$num]);
	header("Location:$url");
}
function priorityFunc($num1){
	static $list = array(1001,1234);
	foreach ($list as $key => $val){
		if($val == $num1){
			return FALSE;
		}
	}
	return TRUE;
}
?>