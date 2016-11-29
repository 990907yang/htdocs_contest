<?php
	$start = $_POST['start'];
	$list = $_post['list'];

	$q = mq("select * from noticeboard idx>0 order by idx desc limit {$start},{$list}");
	while($d = mfa($q)){
?>
<ul class="list" onclick="location='/view/community/text_view?idx=<?=$d['idx']?>'">
	<li class="idx"><?=$d['idx']?></li>
	<li class="title"><?=$d["title"]?></li>
	<li class="writer"><?=$d["writer"]?></li>
	<li class="date"><?php $hm = explode(" ",$d["date"]); echo $hm[0]?></li>
</ul>
<?php } ?>