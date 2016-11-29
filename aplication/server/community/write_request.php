<?php
    include_once("db.php");
    $title = trim($_POST['text']);
    $content = trim($_POST['area']);
    $writer = trim($_POST['wt_pp']);

    if($title == "" || $content == "" || $writer == ""){
        al("내용을 모두 작성해주세요","/view/write");
    }else{
        $sql = "insert into noticeboard set title='{$_POST['text']}', content ='{$_POST['area']}', writer ='{$_POST['wt_pp']}'";
        $db->query($sql);
        al("작성이 완료되었습니다.","/view/noticeboard");
    }
?>