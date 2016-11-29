<?php
	$id = $_POST["id"];
	$name = $_POST["name"];
	$picture = $_POST["picture"];
	$result = $db->query("select * from user where id = '{$id}' ")->fetch();
	if(isset($result[0])){
		echo "faild";
	}else{
		$rs = sql("INSERT INTO user SET 
			id='{$id}',
			name='{$name}',
			picture='{$picture}'");
			echo "success";	
	}
	
?>