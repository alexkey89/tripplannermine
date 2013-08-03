<!DOCTYPE html>

<!--identify language-->
<html class="no-js" lang="en">

<?php
require_once "dblogin.php"; 
require_once "variables.php";
/* require_once "results.php"; */


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
<script type="text/javascript" src="tripplanner.js"></script>

<!--select all-->
<script type="text/javascript">
$(function () {
       $('#select-all').click(function (event) {

           var selected = this.checked;
           // Iterate each checkbox
           $('.regionn').each(function () {    this.checked = selected; });

       });
    });
</script>

<!--select all attributes-->

<script type="text/javascript">
$(function () {
       $('#select-all2').click(function (event) {

           var selected = this.checked;
           // Iterate each checkbox
           $('.attri').each(function () {    this.checked = selected; });

       });
    });
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
				<a href="#">Experience <img src="icons/PNG/experience2whitesmall.png" alt="Experience"/></a>
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
				<a href="#">View <img src="icons/PNG/viewwhitesmall.png" alt="view" /></a>
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
				<a href="#">Enjoy <img src="icons/PNG/compasswhitesmall.png" alt="home"/></a>
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
<p class="breadcrumps">Plan your trip ><span class="capital">Select Cities and details</span></p> 
</div>
</section>

<section id="recom">

<article id="cities">
<p class="dates1">From <input type="date"></input> to <input type="date"></input>


<div id="cities1">
<h1>Plan your trip</h1>
<form action="results.php" method="post" id="cform">
<p><span class="medfonts"> Select the cities you want to visit</span></p>
<p><input type="checkbox" name="select-all" id="select-all" /> Select All</p>
<p> <input type="checkbox" id="Nic" class="regionn" name="region_name_nic" value="1"> Nicosia</input></p>
<p> <input type="checkbox" id="Lar" class="regionn" name="region_name_lar" value="2"> Larnaca</input></p>
<p> <input type="checkbox" class="regionn" name="region_name_lim" value="3"> Limassol</input></p>
<p> <input type="checkbox" class="regionn" name="region_name_paph" value="4"> Paphos</input></p>
<p> <input type="checkbox" class="regionn" name="region_name_fam" value="5"> Famagusta</input></p>

</div>

<div id="leveldetails">
<p><span class="medfonts">Specify your interests</p>

<p><input type="checkbox" name="select-all2" id="select-all2" /> Select All</p>
<p class="leveltitle">Culture</p>
<p> <input type="checkbox" class="attri" name="level_name_mon" value="1"> Monasteries</input></p>
<p> <input type="checkbox" class="attri" name="level_name_meu" value="2"> Meuseums</input></p>
<p> <input type="checkbox" class="attri" name="level_name_anc" value="3"> Ancient ruins</input></p>
<p> <input type="checkbox" class="attri" name="level_name_sight" value="10"> Sightseeing</input></p>



<p class="leveltitle">Sports</p>
<p> <input type="checkbox" class="attri" name="level_name_gol" value="4"> Golf</input></p>
<p> <input type="checkbox" class="attri" name="level_name_foot" value="5"> Football</input></p>



<p class="leveltitle">Leisure</p>
<p> <input type="checkbox" class="attri" name="level_name_pub" value="7"> Pubs</input></p>
<p> <input type="checkbox" class="attri" name="level_name_club" value="6"> Clubs</input></p>



<p class="leveltitle">Nature</p>
<p> <input type="checkbox" class="attri" name="level_name_mount" value="8"> Mountains</input></p>
<p> <input type="checkbox" class="attri" name="level_name_beach" value="9"> Beaches</input></p>



</div>

<div id="googlemap1">
<div id="full_map" style="width:400px;height:300px;"></div>
<input type="submit" value="Next" id="stylesubbutton" />
<!--check if all checkboxes are unchecked -->

</div>


</form>


<!--
<div class="weatherwid">
    <iframe scrolling="no" frameborder="0" allowtransparency="true" src="http://www.weather.gr/cy/en/widgets/weather_w7.aspx?p=224" style="width: auto; height: 112px"></iframe><a target="blank" style="color: #999999; width: auto; display: block; text-align: center; font: 10px/10px Arial,san-serif; text-decoration: none;" href="http://www.weather.gr">weather forecast by weather.gr</a>
    </div>
</article>
-->
  </article>



 <!--recommendations-->
 <article id="bestrecom">
 
 <h1>We recommend</h1>
 
 <div class="reccom">
<h3>Finikoudes, Larnaca</h3>
<p class="breadcrumps">Discover > Regions > Larnaca ><span class="capital">Finikoudes</span></p>
<div class="finikoudespic"></div>
<p>St Andrews monastery is a unique spot amongst Ayia Napa district. If you want to experience a bit more than the amazing nightlife Ayia napa has to offer, this is the place to visit <a href="#" class="amore">…more </a></p>
</div>

<div class="reccom">
<h3>Paphos castle, Paphos</h3>
<p class="breadcrumps">Discover > Regions > Paphos ><span class="capital">Paphos Castle</span></p>
<div class="paphoscastlepic"></div>
<p>St Andrews monastery is a unique spot amongst Ayia Napa district. If you want to experience a bit more than the amazing nightlife Ayia napa has to offer, this is the place to visit <a href="#" class="amore">…more </a></p>
</div>

<div class="reccom">
<h3>Aphrodite's rock, Pahos</h3>
<p class="breadcrumps">Discover > Regions > Paphos ><span class="capital">Aphrodite's rock</span></p>
<div class="petraromioupic"></div>
<p>St Andrews monastery is a unique spot amongst Ayia Napa district. If you want to experience a bit more than the amazing nightlife Ayia napa has to offer, this is the place to visit <a href="#" class="amore">…more </a></p>
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
