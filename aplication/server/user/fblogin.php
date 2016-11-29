<?php 
	$sql = "select * from user where id = '{$_POST['id']}' and name = '{$_POST['name']}'";
	$result = $db->query($sql)->fetch();

	if($result){
		$_SESSION["member"] = $result;
		echo "asd";
	}else{
	}
?>