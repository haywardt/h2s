<?php

// require("execTime.php");

// is the equivalent of {{execTime}}

if(!function_exists("execTime")){
	
	function execTime(){
		// any one time function definitions go in this section
		
		static $startTime = 0;
		$execTime = 0;
		$currentTime=0;
		if (!($startTime)){
			$startTime = microtime(true);
			$currentTime = microtime(true);
			return 0;
			}
		
		$currentTime = microtime(true);
		$execTime = $currentTime - $startTime;
		echo
		"
		
		<div style='
			background:#ccc;
			margin:2em;
			padding: 0 1em ;
			display: inline-block ;
			min-width:2em;
		'>
		<span style='color:#fff;'
		>execTime</span>
		<br>" .
	
		number_format($execTime*1000,3) .

		"ms</div>";
		
		 
	}
}
execTime();
?>