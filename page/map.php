		
		<div id="content">
			
			<div id="page">
				Map
			</div>
		</div>
		<div id="content">
			<!-- Google Maps -->
<div id="map" style="width:100%;height:500px"></div>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(1.489584, 124.838395);
  var mapOptions = {center: myCenter, zoom: 15};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);
}
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9n8-C0m9HWMgO9A5dsKDaW4bSUEW1Bgs&callback=myMap"></script>

		</div>
		
		