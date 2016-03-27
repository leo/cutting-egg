<?php
$checklang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if ($checklang == 'en') { 
	include("lang/en.php");
} else {
	include("lang/de.php");
}

?>
<!DOCTYPE html>
<html lang="de">

<head>
<title>Cutting Egg - Deine Anlaufstelle für visuelle Medien</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/core.css" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<meta name="viewport" content="user-scalable=0, initial-scale=1.0">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.carouFredSel.js"></script>
<script>
$(function() {
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	        || location.hostname == this.hostname) {

		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
			scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
}); });

function PlaySound(soundobj) {
    var thissound=document.getElementById(soundobj);
    thissound.play();
}

function StopSound(soundobj) {
    var thissound=document.getElementById(soundobj);
    thissound.pause();
    thissound.currentTime = 0; 
}

$(document).ready(function() {
	
	// Using custom configuration
	$("#foo2").carouFredSel({
		items				: 5,
		direction			: "left",
		scroll : {
			items			: 1,
			easing			: "swing"
		}					
	});	
});
</script> 

</head>

<body>


<div class="info fadeInDown animated">
<p>Aktuell befindet sich unsere neue Homepage noch im Aufbau, weshalb wir darum bitten eventuelle Fehler zu entschuldigen.</p>
</div>

<div id="header" class="fadeInDown animated">
	<div class="content">
		<a href="#first-row" onmouseover="PlaySound('cackle')" onmouseout="StopSound('cackle')" class="logo"><img src="img/logo.png" />
			<audio id="cackle" preload="auto" loop>
				<source src="audio/cackle.mp3" />
				<source src="audio/cackle.ogg" />
			</audio>
		</a>
		
		<ul class="navi">
			<li><a href="#second-row">Services</a></li>
			<li><a href="#third-row">Referenzen</a></li>
			<li><a href="#fourth-row">Team</a></li>
			<li><a href="showcase">Showcase</a></li>
			<li><a href="#footer">Kontakt</a></li>
			<!-- <li><a class="mob" style="text-decoration:line-through;" target="_blank" >Blog</a></li> -->
		</ul>
	</div>
</div>


<div id="first-row">
	<div class="content">
		<img class="brain-to-pc" src="img/greeting-<?php if ($checklang == 'en') { echo "en"; } else { echo "de"; } ?>.png" />
		<h1><?php echo $lang['welcome-text']; ?></h1>
		<img class="brain-to-pc" src="img/braintopc.png" />
	</div>
</div>

<div id="second-row">
	<div class="content">
		<h1>Services</h1>
		
		<p class="short">Unsere Vorstellung ist simpel. Wir gestalten und entwickeln Marken<br/>
            und Designs f&uuml;r Start-ups oder bestehende Unternehmen, die gerne <br/>einen Relaunch m&#246;chten!</p>

		<div class="service">
			<img src="img/service-1.png" />
			<h2>Illustration & Art</h2>
			<p class="short">Typefaces<br/>Comic<br/>Storyboard</p>
		</div>
		
		<div class="service">
			<img src="img/service-2.png" />
			<h2>Design & Branding</h2>
			<p class="short">Corporate Design<br/>Brand Identity<br/>Layout</p>
		</div>
		
		<div class="service">
			<img src="img/service-3.png" />
			<h2>Web Services</h2>
			<p class="short">Interface Design<br/>Development<br/>Hosting</p>
		</div>
		
		<div class="service">
			<img src="img/service-4.png" />
			<h2>Visual Communication</h2>
			<p class="short">Photography<br/>Motion Design<br/>Animation</p>
		</div>
	</div>
</div>

<div id="third-row">
	<div class="content">
        
		<h1>Referenzen</h1>
        
		<p class="short">Neben der Markenentwicklung bieten wir euch Typefaces,<br/> Illustrationen,
            Comics sowie Event-Management an. Im Folgenden <br/>findet Ihr einige Firmen, für die wir bisher gearbeitet haben.<br/><br/>Stay Egged - nun auch auf <a target="_blank" href="https://www.facebook.com/CuttingEgg">Facebook</a>.</p>
	
		<div id="foo2">
	 <?php
if ($handle = opendir('img/customers')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            echo '<img src="img/customers/'. $file .'" height="100" width="150" style="margin-left: 20px; margin-right: 20px;" />';
        }
    }
    closedir($handle);
}
?>
</div> 
<br/><br/><br/>
<a target="_blank" href="showcase" class="more">Unsere bisherigen Arbeiten</a>
<br/><br/>
	</div>
	



</div>
</div>

<div id="fourth-row">
	<div class="content">
		<h1>Das Team</h1>
		<p class="short">Wir sind eine ausgewogene Gruppe aus jungen<br/>aufgeschlossenen Medienmenschen und leben für<br/>die Ästethik in der Welt.</p>
		
		<div class="member">
			<img src="img/members/felix-f.png" />
			<h2>Felix Fischer</h2>
			<p class="short">Branding & Design</p>
		</div>
		
		<div class="member">
			<img src="img/members/felix-k.png" />
			<h2>Felix Kramer</h2>
			<p class="short">Illustration & Art</p>
		</div>
		
		<div class="member">
			<img src="img/members/leonard-l.png" />
			<h2>Leonard Lamprecht</h2>
			<p class="short">Webdesign & Development</p>
		</div>
		
		<div class="member">
			<img src="img/members/kevin-n.png" />
			<h2>Kevin Nowak</h2>
			<p class="short">Event & Technique</p>
		</div>
		
	</div>
</div>



<div id="footer">
	<div class="content">
		<h2><?php echo $lang['contact-us']; ?></h2>
		<p class="short"><a href="mailto:&#104;&#097;&#108;&#108;&#111;&#064;&#099;&#117;&#116;&#116;&#105;&#110;&#103;&#101;&#103;&#103;&#046;&#100;&#101;">&#104;&#097;&#108;&#108;&#111;&#064;&#099;&#117;&#116;&#116;&#105;&#110;&#103;&#101;&#103;&#103;&#046;&#100;&#101;</a></p>
		<p class="short twoc"><?php echo $lang['also-on']; ?> <a target="_blank" href="https://twitter.com/cuttingegg">Twitter</a> & <a target="_blank" href="https://www.facebook.com/CuttingEgg">Facebook</a>.</p>
	</div>
</div>

<div id="copyright">
	<div class="content">
		<div class="left">&copy; <?php echo date('Y'); ?> Cutting Egg. <?php echo $lang['footer-copyright']; ?></div>
		<div class="right"><div style="margin-top: px;"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="de" data-related="cuttingegg">Twittern</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></div></div>
	</div>
</div>

</body> 
</html>