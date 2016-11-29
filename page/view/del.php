<?php
    $sql = "delete from noticeboard where idx='{$_GET['idx']}'";
    $db->query($sql);
    al("삭제가 완료되었습니다.","/view/noticeboard");
?>