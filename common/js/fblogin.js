window.fbAsyncInit = function() {
	FB.init({
		appId      : '158778567920028', // 앱 ID
		status     : true,          // 로그인 상태를 확인
		cookie     : true,          // 쿠키허용
		xfbml      : true           // parse XFBML
	});
	FB.Event.subscribe('auth.logout',function(response){
		document.location.reload();
	});
	FB.getLoginStatus(function(response){
		if (response.status === 'connected') {
			console.log("페이스북 로그인 되어있습니다.");
			FB.api('/me', function(user) {
				if (user) {
					console.log(user);
					$.ajax({
						type : "POST",
						url : "/server/fblogin",
						data : {id: user.id, name:user.name ,picture:'http://graph.facebook.com/' + user.id + '/picture?type=large'},
						success: function(data) {
							$.post("/server/user/fblogin",{id:user.id,name:user.name},function(d){
								if(d == "success"){
									console.log('로그인 완료');
								}else{
									console.log("실패");
								}
							});
						}	
					});
				}
			});    

		}else if (response.status === 'not_authorized') {
			console.log("not");
		}else {
			console.log("페이스북 로그인이 되어있지 않습니다.");
		}
	});
	FB.Event.subscribe('auth.login', function(response) {
		document.location.href = "/";
	});
};
  // Load the SDK Asynchronously
  (function(d){
	 var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
	 if (d.getElementById(id)) {return;}
	 js = d.createElement('script'); js.id = id; js.async = true;
	 js.src = "//connect.facebook.net/ko_KR/all.js";
	 ref.parentNode.insertBefore(js, ref);
   }(document));