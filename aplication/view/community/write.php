<?php
if(isset($_GET["idx"])){
    $sql = "select * from noticeboard where idx = '{$_GET['idx']}'";
}
?>
<section class="gsp">
    <div class="gsp_main">
        <p><?=isset($_GET["idx"]) ? "게시판 글 수정하기" : "게시판 글쓰기"?></p>
        <p style="color:#ff8888"><?=isset($_GET["idx"]) ? "글을 수정해보세요" : "자유롭게 작성하세요"?></p>
        <?php 
        if(isset($_GET['idx'])){
            foreach($db->query($sql) as $rs){
        ?>
        <form action="/view/modify?idx=<?=$rs['idx']?>" method="post">
        <div class="table wt_tb">
            <textarea class="modi_title"name="text" placeholder="제목" required><?=$rs["title"]?></textarea>
            <textarea name="area" id="content" placeholder="내용" required><?=$rs["content"]?></textarea>
            <?php }
    	}else{ ?>
            <form action="/view/write_request" method="post">
                <div class="table wt_tb">
                    <textarea id="title" name="text" placeholder="제목" required></textarea>
                    <textarea name="wt_pp" id="writer" placeholder="글쓴이" required></textarea>
                    <textarea name="area" id="content" placeholder="내용" required></textarea>
                    <?php } ?>
                </div>
                <div class="tb_footer">
                    <button class="wt" type="submit"><?=isset($_GET["idx"]) ? "수정" : "글쓰기"?></button>
                    <button class="cancle" type="button" onclick="location='/view/noticeboard'">취소</button>
                </div>
            </form>
        </div>
		</form>
	</div>
</section>