
var initialLocation;
var cyprus = new google.maps.LatLng(35.03899,33.23364);
var browserSupportFlag =  new Boolean();

//google maps
function initialize()
{


/*set starting options - All maps*/
var mapProp = {
  center:new google.maps.LatLng(35.03899,33.23364),
  zoom:9,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var firstmap=new google.maps.Map(document.getElementById("full_map_results"),mapProp);

// Try W3C Geolocation (Preferred)
  if(navigator.geolocation) {
    browserSupportFlag = true;
    navigator.geolocation.getCurrentPosition(function(position) {
      initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
      map.setCenter(initialLocation);
    }, function() {
      handleNoGeolocation(browserSupportFlag);
    });
  }
  // Browser doesn't support Geolocation
  else {
    browserSupportFlag = false;
    handleNoGeolocation(browserSupportFlag);
  }
  
  function handleNoGeolocation(errorFlag) {
    if (errorFlag == true) {
      alert("Geolocation service failed.");
    } else {
      alert("Your browser doesn't support geolocation. We've placed you in Cyprus.");
      initialLocation = cyprus;
    }
    map.setCenter(initialLocation);
  }

/*add more details*/
var point= new google.maps.LatLng(35.03899,33.23364);
var marker = new google.maps.Marker({
position:point,
map:firstmap,
title:'Cyprus',
draggable:true,
icon:"http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png",

})


/*click on general pointer*/
google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(firstmap,marker);
  });
  
   var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3 id="firstHeading" class="firstHeading"><img src="icons/PNG/regions.png" height="30" width="35"/></h3>'+
      '<div id="bodyContent">'+
      '<p> Select places of interest</p>' +
      '</div>'+
      '</div>';


  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });
  /*end*/

}
/*initialize api*/
google.maps.event.addDomListener(window, 'load', initialize);


/*hide elements*/
$(".hidestuff").click(function(){

  $(".reccyp").hide("slow", function(){
    $(this).replaceWith("");
  });

});


