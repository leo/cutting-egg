<html>

<head>
<title>Cutting Egg - Showcase</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="css/app.css" media="all" />
<meta name="viewport" content="user-scalable=0, initial-scale=1.0">

</head>

<body>

<div class="header">
<div class="left" style="margin-left: 50px; width: 400px; float: left;"><a target="_blank" href="http://demo.leonardl.de/cuttingegg/">
		<span class="logo">Cutting Egg</span></a></div>
<div class="right" style="float: right; margin-right: 50px;"><span class="logo"><b><a target="_blank" href="https://twitter.com/intent/tweet?source=webclient&text=Cutting%20Egg%20Work-Showcase%20-%20http://cuttingegg.de/showcase/">#</a>Showcase</b></div>
</div>


<section id="photos" class="wrapper">
<?php
if ($handle = opendir('works')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            echo '<img src="works/'. $file .'" />';
        }
    }
    closedir($handle);
}
?>
</section>


</body>

</html>