<?php 

	function onStartClick() {
		echo "start\n" . (exec("sudo systemctl start motion"));	
	}
	
	function onStopClick() {
		echo exec("sudo systemctl stop motion");
	}

	$q = $_REQUEST["q"];
        
	if ($q === "start") {
                echo "Hello";
		onStartClick();
        }

	if ($q === "stop") {
		onStopClick();
	}

	if ($q !== "start" | $q !== "stop") {
		echo "Unkown Request!";
	}
?>
