var map, myLatLng;
function initMap() {
	setTimeout(function(){	
	
	myLatLng = {lat: 37.538922, lng: 126.990611};
	map = new google.maps.Map(document.getElementById("map-canvas"), {
	onmousewheel:false,
	center: myLatLng,
	disableDefaultUI: true,
    zoom: 16
  });
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: "서울디지텍고등학교",
  });
		var content = "서울디지텍고등학교입니다.";
		var infowindow = new google.maps.InfoWindow({ content: content});

	}, 800);
};

$(function(){
	$(window).on("resize", function(){
		setTimeout(function(){ map.setCenter(myLatLng); }, 100);
	});	
});