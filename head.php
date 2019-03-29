<?php
  // $la = language
  // $phill = page number
  // $pa = page type: view, about or support.




   // $la / language-variable
   
if (!isset($la)or$la=="") {
	
	$la = $def_lang;
	
	}
	
  // checks $la variable corresponds to a value in the $available_languages in statics.php. If not English is set as default language

	
   $language_test = array_search($la, $available_languages);
	
	if ($language_test === FALSE) {
	
	$la = $def_lang; 
	
	}
	
	
	
	// import language specific interface
	
	$language_interface = 'interface_' . $la . '.php';
	$default_language_interface = 'interface_' . $def_lang . '.php';
	
if (file_exists($language_interface)) {
	
include $language_interface;

 }else{ include $default_language_interface;
	
  }
	
	

  // $phill (page number) is set to the latest page if the variable is not set or out of scope. 

if (!isset($phill)or$phill=="") {
	
	$phill = findsidste($la);
	
	}
	
	$sidsteside = findsidste($la);
	
	
if ($phill > $sidsteside) {	

$phill = findsidste($la);

	}
	
if($phill<=0) {
	
$phill=1;

}
	
  //$pa / page type is set to "view" if nothing is entered or something wrong is entered

if (!isset($pa) or $pa==""){

	$pa = "view";

}


	// PAGE
	// Checks if $pa is valid 

	
   $page_test = array_search($pa, $static_pages);
	
	if ($language_test === FALSE and $pa<> "view") {
	
	$pa = 'view'; 

}

	// Creates title and find the right content file.

if($pa=="view") {


$sidenavn = lavnavn($phill, $la);


$title = $pagetitle_view . $phill . ': ' . $sidenavn;

$page_content = 'view.php';


}

elseif($pa=="support") {
	
$title = $pagetitle_support;

$page_content = $la . '-support.php';
}else {
$title = $pagetitle_about;

$page_content = $la . '-about.php';


	}




  // ENCODING
  
echo '<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">';

  // Title

echo '<title>' . $title . '</title>';

	
  // OPEN GRAPH META DATA
	
echo "\n" . '<meta property="og:image" content="' . $domain . 'images/other/' . $ogimage . '" />' . "\n" . '<meta property="og:image:width" content="1200" />' . "\n" . '<meta property="og:image:height" content="630" />' . "\n" . '<meta property="og:image:type" content="image/png" />' . "\n" . '<meta property="og:title" content="' . $title . '" />' . "\n" . '<meta property="og:url" content="' . $domain . '?phill=' . $phill . '&pa=' . $pa . '&la=' . $la . '" />' . "\n" . '<meta property="og:description" content="' . $og_description . $sidenavn . '" />' . "\n" . '<meta property="og:locale" content="' . $oglocale . '" />' . "\n" . "\n" . '<meta name="twitter:card" content="summary">' . "\n" . '<meta name="twitter:title" content="' . $title . '" />'. "\n" . '<meta name="twitter:description" content="' . $og_description . $sidenavn . '" />' . "\n" . '<meta name="twitter:url" content="' . $domain . '?phill=' . $phill . '&pa=' . $pa . '&la=' . $la . '" />' . "\n" . '<meta name="twitter:image" content="' . $domain . 'images/other/' . $ogtwitimage . '"> ';
	?>
	
