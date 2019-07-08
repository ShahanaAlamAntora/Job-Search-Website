<!DOCTYPE html>
<html>

    <head>
	<title></title>
	
	<style>
	
	
	    *{
			margin: 0;
			padding:0;
			
			
		}
	
	    #map{
			
			height:500px;
			width:100%;
			
			
			
			
		}
	
	</style>
	
	
	
	</head>
	
	<body>
	    <div id="map"></div>
		
		<script>
		    
			function initMap(){
				var location = {lat: 23.810332 , lng : 90.412518 };
				var map = new google.maps.Map(document.getElementById("map") , {
					
					zoom:4,
					center: location
					
				});
				
				var marker = new google.maps.Marker({
					
					position:location,
					
					map: map
				});
			}
		
		</script>
		
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" >    </script>
	
	</body>



</html>