<?php
    include_once("db.php");
    $sql = "update noticeboard set title = '{$_POST['text']}', content = '{$_POST['area']}' where idx = '{$_GET['idx']}'";
    $db->query($sql);
    al("수정이 완료되었습니다.","/view/noticeboard");
?>