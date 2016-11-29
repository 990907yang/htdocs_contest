<?php
	$sql = "select * from noticeboard order by idx desc";
echo $get[1];
?>
<section class="gsp">
	<div class="gsp_main">
	<p>디지텍 자유게시판</p>
	<p style="color:#ff8888">누구라도 쓸 수 있어요</p>
		<div class="table">
			<div class="tb_header">
				<ul>
					<li class="idx">번호</li>
					<li class="title">제목</li>
					<li class="writer">글쓴이</li>
					<li class="date">날짜</li>
				</ul>
			</div>
			<div class="tb_section">
			<?php foreach($db->query($sql) as $rs) { ?>
				<ul class="list" onclick="location='/view/text_view?idx=<?=$rs['idx']?>'">
					<li class="idx"><?=$rs['idx']?></li>
					<li class="title"><?=$rs["title"]?></li>
					<li class="writer"><?=$rs["writer"]?></li>
					<li class="date"><?php $hm = explode(" ",$rs["date"]); echo $hm[0]?></li>
				</ul>
				<?php } ?>
			</div>
		</div>
		<div class="tb_footer">
			<button class="wt" type="button" onclick="location='/view/write'">글쓰기</button>
		</div>
	</div>
</section>