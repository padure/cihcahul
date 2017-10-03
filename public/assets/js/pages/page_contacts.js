var ContactPage = function () {

    return {
        
    	//Basic Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				scrollwheel: true,				
				lat: 45.888867,
				lng: 28.196950
			  });
			  
			  var marker = map.addMarker({
				lat: 45.888867,
				lng: 28.196950,
	            title: 'Company, Inc.'
		       });
			});
        },

        //Panorama Map
        initPanorama: function () {
		    var panorama;
		    $(document).ready(function(){
		      panorama = GMaps.createPanorama({
		        el: '#panorama',
		        lat : 45.888867,
		        lng : 28.196950
		      });
		    });
		}        

    };
}();