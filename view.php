 
<?php

  //Title

echo '<h1>' . $episode . $phill . ' - ' . $sidenavn . '</h1>';


  // Page
  
  // the Phill variable is page number 

  // setting page (phill) to last or first page if out of scope.
if($phill>1) {
$phillned = $phill-1;
}else{$phillned = $phill;}

if ($phill < $sidsteside){
$phillop = $phill+1;
}else{$phillop = $phill;}

  //making names for the 'back' and 'forward' buttons

$sidenavnned = lavnavn($phillned,$la);

$sidenavnop = lavnavn($phillop,$la);

  // Making names for the back' and 'forward' buttons if it is the first or the last page - and inserting dot or arrow

if($phill==1) {$sidetitelned = $this_is_last_first; $firstpil = 'images/other/dot_venstre.png';
}else {$sidetitelned = $phillned . ' - </div><div class="navbloktext_left">' .  $sidenavnned; $firstpil = 'images/other/pil2_venstre.png';}

if($phill==$sidsteside) {$sidetitelop = $this_is_last_first; $lastpil = 'images/other/dot_hojre.png';
}else {$sidetitelop = ' - ' . $phillop . '</div><div class="navbloktext_right">' . $sidenavnop; $lastpil = 'images/other/pil2_hojre.png';}


  // the variable for the back and forward button-block


$fremtilbage1 =  '

<div class="navblok_pad">

<div class="navblok">

<a href="' . $home . '1&pa=view&la=' . $la . '"><div class="navblok_firstlast"><div class="navblokpil_left"><img class="pil_left" src="' . $firstpil . '"></div><div class="navbloktext_left">' . $first . '</div></div></a>

<a href="' . $home . $phillned . '&pa=view&la=' . $la . '"><div class="navblok_titel"><div class="navblokpil_left"><img class="pil_left" src="images/other/pil1_venstre.png"></div><div class="navbloktext_left">' . $sidetitelned . '</div></div></a>

<div class="navblok_center"><form>goto:<input type="text" name="phill"></form></div>

<a href="' . $home . $phillop . '&pa=view&la=' . $la . '"><div class="navblok_titel"><div class="navblokpil_right"><img class="pil_right" src="images/other/pil1_hojre.png" alt=""></div><div class="navbloktext_right">' .  $sidetitelop . '</div></div></a>

<a href="' . $home . $sidsteside . '&pa=view&la=' . $la . '"><div class="navblok_firstlast"><div class="navblokpil_right"><img class="pil_right" src="'. $lastpil . '" alt=""></div><div class="navbloktext_right">' . $last . '</div></div></a>

</div>

<img src="images/other/navblok_bund.png" alt="">

</div>';


  // the actual page
  
  // back and forward button-block top


echo $fremtilbage1;


  // Insert the main image - comic page

$bild = findbild($phill,$la);


echo '<img class="hovedbild" src="images/pages/' . $la . '/' . $bild . '" witdh="966" height="1350" />';


echo '<div class="spacer"></div>';

  // back and forward button-block bottom

echo $fremtilbage1;


echo '<div class="view_bund"><img src="images/other/streg.png" alt=""></div>';


echo '<div class="CC">' . $consider . '<br><div class="CC-img"><img src="' . $domain . '/images/other/Spacer_80.jpg"><a class="CC-img" href="https://liberapay.com/Katharsisdrill/donate"><img src="' . $domain . '/images/other/liberapay_logo.png"></a><br>' . $cc_notice . '</div>';

?>