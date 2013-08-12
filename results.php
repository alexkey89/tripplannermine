<!DOCTYPE html>

<!--identify language-->
<html class="no-js" lang="en">

<?php
require_once "dblogin.php"; 
require_once "variables.php";
?>

<!-link responsive menu-->
<link rel="stylesheet" href="meanmenu.css" media="all" />

<head>

<meta charset="utf-8">

<!--main fonts-->
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:400,700|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>

<!--google API-->
<script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>

<!--link global css-->
<link rel="stylesheet" href="CSS/master.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">


<title>Cyprus tourism </title>

<style type="text/css">


</style>


<!--responsive menu jasvascript-->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script> 
<script src="jquery.meanmenu.js"></script> 


 <!-- bjqs.css contains the *essential* css needed for the slider to work -->
    <link rel="stylesheet" href="bjqs.css">


<!--load jquery slider css -->
    <link rel="stylesheet" href="demo.css">

    <!-- load jquery -->
    <script src="js/bjqs-1.3.min.js"></script>


<script>
jQuery(document).ready(function () {
    jQuery('header nav').meanmenu();
});
</script>

<!--js files  -->
<script type="text/javascript" src="masterjs.js"></script>
<!-- <script type="text/javascript" src="results.js"></script> -->

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>

<script type="text/javascript">
function hideLocations(id) {
    document.getElementById(id).style.display = 'none';
    // hide the link
}

</script>

</head>
<body onLoad="PreloadImages()">
<header id="header1">


<!--original menu-->

<nav class="menu1">

<div id="styleswitch">
<!--change language-->
    <p>Choose your language
      <select onchange="setActiveStyleSheet(this.value)">
        <option value="default">English - EN</option>
        <option value="default">Ελληνικά - GR</option>
        <option value="default">Francais - FR</option>
        <option value="altsheet">Polski - PL</option>
      </select>
    </p>
  </div>

<!--main menu-->
		<ul class="menu1">
<div id="kotlogo">
<a href="newhometest.html"/></a>
</div>
			<li><a href="newtesthome.html" class="selected">Home <img src="icons/PNG/homewhitesmall.png" alt="home"/></a></li>
<!--begin drop down DISCOVER-->

			<li class="droplist">
				<a href="#">Discover <img src="icons/PNG/discoverwhitesmall.png" alt="discover" /></a>
				<div class="droplistContainer">
					<div class="droplistOut">
						<div class="trianglewrapper"></div>
						<ul>
							<li>Cycling tours <img src="icons/PNG/bikesmall.png" alt="cycling"/></li>
							<li>Traditional villages <img src="icons/PNG/mountainsmall.png" alt="villages" /></li>
							<li>Regions <img src="icons/PNG/regionssmall.png" alt="regions" /></li>

						</ul>
					</div>
				</div>
			
			</li>
			<!--end drop down-->
			
			
			<!--begin drop down EXPERIENCE -->

			<li class="droplist">
				<a href="Experience.php">Experience <img src="icons/PNG/experience2whitesmall.png" alt="Experience"/></a>
				<div class="droplistContainer">
					<div class="droplistOut">
						<div class="trianglewrapper"></div>
						<ul>
							<li>Events &#38; updates <img src="icons/PNG/calendarsmall.png" alt="events and updates" /></li>
							<li>Sport &#38; leisure <img src="icons/PNG/footballsmall.png" alt="sports and leisure" /></li>
							<li>Nature <img src="icons/PNG/leafsmall.png" alt="nature" /></li>
						</ul>
					</div>
				</div>
			
			</li>
			<!--end drop down-->
			
						
			<!--begin drop down VIEW -->

			<li class="droplist">
				<a href="ViewPage.html">View <img src="icons/PNG/viewwhitesmall.png" alt="view" /></a>
				<div class="droplistContainer">
					<div class="droplistOut">
						<div class="trianglewrapper"></div>
						<ul>
							<li>Panorama viewer <img src="icons/PNG/panoramasmall.png" alt="panorama viewer" /></li>
							<li>Videos <img src="icons/PNG/playsmall.png" alt="videos" /></li>
							<li>Audio guides <img src="icons/PNG/audiosmall.png" alt="audio guides"/></li>
						</ul>
					</div>
				</div>
			
			</li>
			<!--end drop down-->


<!--begin drop down ENJOY-->

			<li class="droplist">
				<a href="enjoypage.php">Enjoy <img src="icons/PNG/compasswhitesmall.png" alt="home"/></a>
				<div class="droplistContainer">
					<div class="droplistOut">
						<div class="trianglewrapper"></div>
						<ul>
							<li>Beaches <img src="icons/PNG/beachsmall.png" alt="beaches"/></li>
							<li>Restaurants <img src="icons/PNG/dining2small.png" alt="restaurants" /></li>
							<li>Accommodation <img src="icons/PNG/bedsmall.png" alt="Accommodation" /></li>
							<li>Nightlife <img src="icons/PNG/musicsmall.png" alt="nightlife" /></li>
							<li>Diving <img src="icons/PNG/divingsmall.png" alt="diving" /></li>



						</ul>
					</div>
				</div>
			
			</li>
			<!--end drop down-->



<!--search option-->
		</ul>
		<form method="get" class="searchbutton" action="http://www.google.com/search">search the site
<table border="0" cellpadding="0">
<tr><td>
<input type="text" name="q" size="15"
maxlength="200" value="" />
<input type="submit"  value= "Search"/></td></tr>
<tr><td align="center" style="font-size:75%">
</td></tr></table>
</div>
</form>
</nav>



<!--end-->


<!--tools menu-->
<div id="subbb">
  
<p>
<span class="dropt" title="profile"><a href="#"><img src="icons/PNG/profilesmall.png" alt="profile"/></a>
  <span><img src="icons/PNG/profilesmall.png" alt="view your profile"/><br/>
  View your Profile
  </span>
</span>
<!-- <img src="icons/PNG/star.png" width="40" height="40" alt="print"/> -->
<!--testing hover-->

<span class="dropt" title="print"><a href="#"><img src="icons/PNG/print.png" alt="print"/></a>
  <span><img src="icons/PNG/print.png" alt="print"/></a><br/>
  Print this page
  </span>
</span>
<!-- <img src="icons/PNG/print.png" alt="print"/>	 -->
<span class="dropt" title="favourites"><a href="#"><img src="icons/PNG/starsmall.png" alt="favourites"/></a>
  <span><img src="icons/PNG/star.png" height="30" width="30" alt="favourites"/><br/>
  View your favourites
  </span>
</span>

<span class="dropt" title="information"><a href="#"><img src="icons/PNG/info.png" height="30" width="30"/></a>
  <span><img src="icons/PNG/info.png" height="20" width="20" alt="info"/><br/>
  General information
  </span>
</span>

</p>

</div>

<!--end-->

<section id="bread">
<p class="breadcrumps">Plan your trip > Select Cities and details > <span class="capital">View results</span></p> 
</div>
</section>

<!--php drop query-->
<?php

/*
function retrieve_Region_Coordinates($db_server, $region){
$query3 = mysqli_query($db_server, "SELECT DISTINCT Latitude, Longitude  
											  FROM Regions WHERE Region_Name = '" . $region . "'");
while($result3= mysqli_fetch_assoc($query3)){
	
	echo 'var Region_Results = '. $result3['Latitude'] . $result3['Longitude'] . '';
}
}
*/

?>
<section id="recom">
<h1 class="recctitle"> Select your starting point:</h1>
<select class="startp" onchange="setActiveStyleSheet(this.value)">
<option value="Nicosia" onclick="" class="Nicosia"> Nicosia </option>
<option value="Paphos" class="Paphos"> Paphos </option>
<option value="Famagusta" class="Protaras"> Protaras </option>
<option value="Famagusta" class="Ayia Napa"> Ayia Napa </option>
<option value="Larnaca" class="Larnaca"> Larnaca </option>
<option value="Limassol" class="Limassol"> Limassol </option>
<option value="Limassol" class="Troodos"> Troodos </option>
<option value="Limassol" class="Platres"> Platres </option>


</select>

<!--
<div id="mappos">
<div id="full_map_results" style="width:1040px;height:300px;"></div>
</div>
-->
<div>
     <div id="map"></div> 
     <div id="panel"><p class="directtitl">Direction details:</p></div> 
   </div>
<script type="text/javascript"> 
var directionsService = new google.maps.DirectionsService();
var directionsDisplay = new google.maps.DirectionsRenderer();
var start_coord = new google.maps.LatLng(35.166667,33.366667);

     var map = new google.maps.Map(document.getElementById('map'), {
       zoom:8,
       mapTypeId: google.maps.MapTypeId.ROADMAP,
center: start_coord
     });

     directionsDisplay.setMap(map);
     directionsDisplay.setPanel(document.getElementById('panel'));

	function showRoute(var_or, var_dest) {
     var request = {
       origin: var_or, 
       destination: var_dest,
       travelMode: google.maps.DirectionsTravelMode.DRIVING
     };

     directionsService.route(request, function(response, status) {
       if (status == google.maps.DirectionsStatus.OK) {
         directionsDisplay.setDirections(response);
       }
    });
}
</script> 

<div id="scrollwrap">
<h1 class="recctitle"> We recommend:</h1>
<h1>
<?php

if ($Region_set == 1 && $Location_set == 1)
{
$query2 = mysqli_query($db_server, "SELECT DISTINCT Loc.Location_Name, Loc.Latitude, Loc.Longitude,  Reg.Region_Name, Reg.Latitude AS Reg_Latitude, Reg.Longitude AS Reg_Longitude, Attr.Type
											  FROM Locations Loc INNER JOIN Attributes Attr ON Loc.Attribute_id = Attr.id INNER JOIN Regions Reg ON Loc.Region_id = Reg.id
WHERE (Reg.id='". $Region_Name_nic . "' OR Reg.id='". $Region_Name_lar . "' OR Reg.id='". $Region_Name_lim . "' OR Reg.id='". $Region_Name_paph . "' OR Reg.id='". $Region_Name_fam . "') AND (Attr.ID='" . $level_name_mon . "' OR Attr.ID='" . $Level_Name_meu . "' OR Attr.ID='" . $Level_Name_sight . "' OR Attr.ID='" . $Level_Name_anc . "' OR Attr.ID='" . $Level_Name_gol . "' OR Attr.ID='" . $Level_Name_foot . "' OR Attr.ID='" . $Level_Name_pub  . "' OR Attr.ID='" . $Level_Name_club  . "' OR Attr.ID='" . $Level_Name_mount . "' OR Attr.ID='" . $Level_Name_beach . "') ORDER BY Reg.Region_Name, Loc.Location_Name");
}else{
	/*query to display rec based on attributes */
$query2 = mysqli_query($db_server, "SELECT DISTINCT Loc.Location_Name, Loc.Latitude, Loc.Longitude,  Reg.Region_Name, Reg.Latitude AS Reg_Latitude, Reg.Longitude AS Reg_Longitude, Attr.Type
											  FROM Locations Loc INNER JOIN Attributes Attr ON Loc.Attribute_id = Attr.id INNER JOIN Regions Reg ON Loc.Region_id = Reg.id
WHERE (Reg.id='". $Region_Name_nic . "' OR Reg.id='". $Region_Name_lar . "' OR Reg.id='". $Region_Name_lim . "' OR Reg.id='". $Region_Name_paph . "' OR Reg.id='". $Region_Name_fam . "') OR (Attr.ID='" . $level_name_mon . "' OR Attr.ID='" . $Level_Name_meu . "' OR Attr.ID='" . $Level_Name_sight . "' OR Attr.ID='" . $Level_Name_anc . "' OR Attr.ID='" . $Level_Name_gol . "' OR Attr.ID='" . $Level_Name_foot . "' OR Attr.ID='" . $Level_Name_pub  . "' OR Attr.ID='" . $Level_Name_club  . "' OR Attr.ID='" . $Level_Name_mount . "' OR Attr.ID='" . $Level_Name_beach . "') ORDER BY Reg.Region_Name, Loc.Location_Name");
	
}

$quote = "'";
											  
while($result2= mysqli_fetch_assoc($query2)){
												  
echo '<ul id="' . $result2['Location_Name'] . '" class="reccyp">
<li class="regtitle">'. $result2['Location_Name'] . '<img class="typeattrbox" src="icons/PNG/' . $result2['Type'] . '.png"/></li>
<li class="regtitlesmall">'. $result2['Region_Name'] . '</li>
<li class="reccypli">
<img src="pics/' . $result2['Location_Name'] . '.jpg"/></li>
<li class="interested">Are you interested?<img  class="ybutton" onclick="var start_coord = new google.maps.LatLng(' . $result2['Reg_Latitude'] . ',' . $result2['Reg_Longitude'] . ');
var end_coord = new google.maps.LatLng(' . $result2['Latitude'] . ',' . $result2['Longitude'] . ');showRoute(start_coord,end_coord);return false;" src="icons/PNG/checkmarkgreen.png"/><img class="hbutton" onclick="hideLocations('.$quote . $result2['Location_Name'] .$quote. ')" src="icons/PNG/closered.png"/> </li> 
</ul>
';
}




/* mysqli_free_result($this->brand_query); */



?>
</h1>
</div>
 <!--end of main section-->
</section>

<!--sitemap-->
<div id="sitemapfooter">
<p>Sitemap</p>
<div class="sitemapfooter_column med">
      <h3>Discover</h3>
      <ul>
        <li><a href="#" class="active">Cycling tours</a></li>
        <li><a href="#">Traditional villages</a></li>
        <li>Regions > <a href="#">Nicosia</a> | <a href="#">Larnaca </a><a href="#">Limassol</a> | <a href="#">Famagusta </a>| <a href="#">Paphos </a></li>
      </ul>
    </div>
    <div class="sitemapfooter_column">
      <h3>Experience</h3>
      <ul>
        <li><a href="#">Events &#38; updates </a></li>
        <li><a href="#">Sport &#38; leisure </a></li>
        <li><a href="#">Nature </a></li>
      </ul>
    </div>
    
    <div class="sitemapfooter_column">
      <h3>View</h3>
      <ul>
        <li><a href="#">Panorama viewer</a></li>
        <li><a href="#">Videos</a></li>
        <li><a href="#">Audio guides</a></li>

      </ul>
    </div>
    
    
    <div class="sitemapfooter_column">
      <h3>Enjoy</h3>
      <ul>
        <li><a href="#">Beaches</a></li>
        <li><a href="#">Restaurants</a></li>
        <li><a href="#">Accommodation</a></li>
        <li><a href="#">Nightlife</a></li>
        <li><a href="#">Diving</a></li>

      </ul>
    </div>
    
    
    <div id="eulogo">
    <h3>Partnership</h3>
    <img src="icons/PNG/eulogo.jpg" alt="eu logo" />
    <img src="icons/PNG/cyprusflag.jpg" alt="eu logo" />

    </div>
    
    <!-- End sitemap footer Columns -->
</div>



<!--footer-->

<footer id="footer1">

<div id="footer">
		
		<div id="centerfoot">	
		<ul>
				<li><a  href="#" title="KOTCYIM">KOT Cy&#169;</a></li>
				<li><a  href="#" title="Terms and Conditions">Terms and Conditions</a></li>
					<li><a  href="#" title="Policies">Policies</a></li>
				</ul>
				<div id="follow">
					Follow us on <a href="http://www.facebook.com" class="fb"></a> and <a href="https://twitter.com/lovecyprus"  class="twitter"></a>
				</div>
			</div>
		</div>	


</footer>



</body>

</html>
