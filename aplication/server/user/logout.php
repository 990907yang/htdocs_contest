<?php
	session_destroy();
	local("clear()");
	al("로그아웃 되었습니다.");
	move('/');
?>