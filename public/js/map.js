$(document).ready(function(){

		var uluru = {lat: 13.337219, lng: 144.658861};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
		
        var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">Breadfruit</h1>'+
            '<div id="bodyContent">'+
            '<p><b>Breadfruit</b>, also referred to as <b>Lemai</b>, is a large ' +
            'tree in the southern part of Guam '+
            'The lemai is a fruit bearing tree with multiple seeds '+
            '<img src="https://www.fast-growing-trees.com/images/D/Breadfruit_Tree_450_D1.png" width="150">'+
            '</div>'+
            '</div>';		
        var infowindow = new google.maps.InfoWindow({
          content: contentString,
          maxWidth: 200
        });

        var marker = new google.maps.Marker({
          position: {lat: 13.337229, lng: 144.658547},
          map: map,
          title: 'Breadfruit'
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
		

});