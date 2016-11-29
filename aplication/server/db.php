<?php
	session_start();
    try{
        $db = new PDO("mysql:host=localhost; dbname=shgs; charset=utf8","root","");
        /*$db->getAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $db->getAttribute(PDO::ATTR_EMULATE_PREPARES,false);*/
    }catch(PDOException $Exception){
        die("연결실패".$Exception->getMessage());
    }
	function al($tx,$lc){
		echo "<script>
			alert('$tx');
			location='$lc';
		</script>";
	}
?>