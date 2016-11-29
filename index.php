<?php
	
	$get= isset($_GET["param"]) ? explode("/",$_GET["param"]) : null;
	$dir = isset($get[0]) ? $get[0] : null;
	$dir2 = isset($get[1]) ? $get[1] : null;
	$page = isset($get[1]) ? $get[1] : null;
	if($dir == null || $dir == null || $page == null){
    	$dir = "view";
    	$dir2 = "main";
    	$page = "main";
   }
	include_once($_SERVER["DOCUMENT_ROOT"]."/aplication/server/db.php");
?>
<?php
	define("_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/aplication");
	define("_VIEW", _ROOT . "/view");
	define("_SERVER", _ROOT . "/server");
	$noHeader = array("");
	$noFooter = array("");

	if(!in_array($page, $noHeader) && strcmp($dir, "server") != 0) {
		include_once(_VIEW . "/main/header.php");
	}
	include_once(_ROOT . "/{$dir}/{$dir2}/{$page}.php");
	if(!in_array($page, $noFooter) && strcmp($dir, "server") != 0) {
		include_once(_VIEW . "/main/footer.php");
	}
?>
	

