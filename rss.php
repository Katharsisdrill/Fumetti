<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?php

// RSS feed generator


  // Prime variabler 

$pa = $_GET['pa'];
$phill = $_GET['phill'];
$la = $_GET['la'];

  // get statics (domain, copyright info, number of languages, Open Graph info )
include 'statics.php';

  // get functions
include 'functions.php';

  // Page copyright
echo '<!--' . "\n" . $copyright . "\n" . '-->' . "\n" . "\n";

?>

<head>

<?php

  // Checks if language is set.

if (!isset($la)or$la=="") {
	
	$la = $def_lang;
	
	}
	
  // checks $la variable corresponds to a value in the $available_languages in statics.php. If not English is set as default language

	
   $language_test = array_search($la, $available_languages);
	
	if ($language_test === FALSE) {
	
	$la = $def_lang; 
	
	}
	
  // get langguage specific strings
include 'interface_' . $la . '.php';


  // ENCODING
  
echo '<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">';

  // TITLE
  
echo '<title>' . $comic_name . ' - ' . $rss_feed . '</title>';


?>



<link rel="stylesheet" type="text/css" href="phill.css">

</head>
<body>

<div class="whole">

<div class="rss_strimmel">

<img src="images/menu/rss_menu/RSS_top.png" alt="" />

<?php

function rss_maker($available_languages,$language,$language_names) {

foreach($available_languages as $language){
	

	include 'interface_' . $language . '.php';
	include 'statics.php';	
	
//	findbild($side,$language);
	$lastpage = findsidste($language);

	$language_name = findLanguageName($language,$available_languages,$language_names);



	$docname = 'RSS/' . $language . '_rss_Phill.rss';


		$doc_root = new DOMDocument('1.0','utf-8');
		$doc_root->preserveWhiteSpace = false;
		$doc_root->formatOutput = true;

		$xml_rss = $doc_root->createElement('rss');
		$xml_rss = $doc_root->appendChild($xml_rss);
		$xml_rss->setAttribute("version","2.0");
		$xml_rss->setAttribute("xmlns:atom","http://www.w3.org/2005/Atom");
		$xml_rss->setAttribute("xmlns:media","http://search.yahoo.com/mrss/");

		$xml_channel = $doc_root->createElement('channel');
		$xml_channel = $xml_rss->appendChild($xml_channel);

		$xml_channel->appendChild($doc_root->createElement('title',$comic_name));
		$xml_channel->appendChild($doc_root->createElement('link',$domain));
		$xml_channel->appendChild($doc_root->createElement('description',$channel_description));
		$xml_channel->appendChild($doc_root->createElement('language',$language));
		$xml_atom_link = $doc_root->createElement('atom:link');
		$xml_atom_link->setAttribute("rel","self");
		$xml_atom_link->setAttribute("type","application/rss+xml");
		$xml_atom_link->setAttribute("href",$domain . $docname);
		$xml_channel->appendChild($xml_atom_link);
		
		

		for ($i = $lastpage; $i >= 1; --$i) {
			
		$title =	lavnavn($i,$language);
		$link = $domain . '?phill=' . $i . '&amp;pa=view&amp;la=' . $language;
		$description = $rss_description . '<h3>' . $title . '</h3>';

		$xml_item = $doc_root->createElement('item');
		$xml_item = $xml_channel->appendChild($xml_item);
		
		$xml_title = $doc_root->createElement('title');
		$xml_title = $xml_item->appendChild($xml_title);
		$xml_title->appendChild($doc_root->createCDATASection($title));
		
		$xml_item->appendChild($doc_root->createElement('link',$link));
		
		$xml_description = $doc_root->createElement('description');
		$xml_description = $xml_item->appendChild($xml_description);
		$xml_description->appendChild($doc_root->createCDATASection($description));
		
		}

		$xmlroot = $doc_root->save($docname);

		echo '<a href="' . $docname . '"><h1 class="RSS-link">' . $rss_feed . ' - ' . $language_name . '</h1></a><p class="RSS-pageav">' . $lastpage . ' - ' . $pagesav . '</p><br>';


	}

}

rss_maker($available_languages,$la,$language_names);

?>
<img src="images/menu/rss_menu/spacer_130_height.png" alt="" />
<img class="rss_bottom" src="images/menu/rss_menu/RSS_bottom.png" alt="" />
</div>
</div>

</body>
</html>