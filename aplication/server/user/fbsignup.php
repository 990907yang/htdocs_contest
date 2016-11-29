<?php
	$sql = "insert into user set id = '{$_POST['id']}' , name = '{$_POST['name']}' , picture = '{$_POST['picture']}'";
	$overlap = "select * from user where id = '{$_POST['id']}'";
	$ovresult = $db->query($overlap)-> fetch();
	if(isset($ovresult[0])){
		echo "faild";
	}else{
		$result = $db->query($sql);	
		echo "success";
	}
?>