





<?php

// VIEW PAGE IMAGES

// gets the array of the files in the appropriate pages-folder
	

function mappeindhold($language) {
// henter oplysninger om hvad der ligger i billedmappen


		$billedmappen = 'images/pages/' . $language;

	$mappe_array = array_diff(scandir($billedmappen), array('..', '.'));
	
return $mappe_array;
}


function findbild($side,$language){
// henter filnavn på filen med nummeret $side
$mappe_array = mappeindhold($language);
  
foreach($mappe_array as $value){
	$tallet = substr($value,0,3);
 
 if($tallet==$side) {return $value;} 
}

}


function lavnavn($side,$language){
// Titel for $side
	
	$grundnavn = findbild($side,$language);
	$titel = substr($grundnavn,4,-4); // fjerner "00x-" og ".png"
	$titel = strtr($titel, "_", " "); // fjerner underscore
	
	
	return $titel;

}

function findsidste($language){

	$mappe_array = mappeindhold($language);
	

$lastnumber = count($mappe_array, $mode = null);
return  $lastnumber;

}

// LANGUAGE

function findLanguageName($language,$available_languages,$language_names){
//	returns the full name of the 	
	
	$count = 0;
	
	foreach($available_languages as $value){
   if($value==$language) {return $language_names[$count];}else{$count = $count + 1;}
   };

}

function findDropdownLanguages($language,$available_languages){
	
	
	$current_language = array_search($language,$available_languages); 
	// remove current language   
   array_splice($available_languages,$current_language,1);
	//sort alphabetically  
   sort($available_languages);
   
   return $available_languages;

}

// RSS



?>