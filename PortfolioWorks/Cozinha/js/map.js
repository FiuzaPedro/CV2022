function initMap() {
	let cozinha = {lat: 38.7066609, lng: -9.2101306134};
	let mapOptions = {
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		zoom: 14,
		center: cozinha		
	}
    let map = new google.maps.Map(document.getElementById('map'), mapOptions);
    
    let marker = new google.maps.Marker({
          position: cozinha,
          map: map
        });
} //end function init