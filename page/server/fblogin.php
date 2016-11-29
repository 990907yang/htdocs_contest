<?php 
	$id = $_POST["id"];
	$name = $_POST["name"];
	
	$rs = fetch("SELECT * FROM user WHERE id='{$id}' AND name='{$name}'");
	if($rs) {
		$_SESSION["member"] = $rs;
		echo "success";
	}
	else {
		echo "fail";
	}
?>