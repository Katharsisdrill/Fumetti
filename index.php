<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<?php
  // Prime variabler 

$pa = $_GET['pa'];
$phill = $_GET['phill'];
$la = $_GET['la'];



  // get statics (domain, copyright info, number of languages, Open Graph info )
include 'statics.php';

  // get functions
include 'functions.php';

  // Page copyright
echo '<!--' . "\n" . $copyright . "\n" . '-->' . "\n" . "\n" . '<head>' . "\n";

  // Page head
include 'head.php';



?>
	
<link rel="stylesheet" type="text/css" href="phill.css">
</head>
<body>

<div class="whole">

<div class="strimmel">

  
<!-- Top menu -->

<?php

$home = $domain . '?phill=';

include 'menu.php';

//echo '<a href="' . $home . $phill . '&pa=view&la=' . $la . '"><img src="images/other/Phill_menu_home.png"></a><a href="' . $home . $phill . '&pa=about&la=' . $la . '"><img src="images/other/Phill_menu_about.png"></a><a href="' . $home . $phill . '&pa=support&la=' . $la . '"><img src="images/other/Phill_menu_support.png"></a>';



?>



<!-- the page - view, about or support -->
<?php

// her skal der gøres noget med support og About


include $page_content;

// if($pa=='about') {include 'about.php';}elseif($pa=='support') {include 'support.php';}else{include 'view.php';}

?>

</div>
</div>

</body>

</html>











