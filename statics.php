<?php






  // domain, copyright and other info
  
  $domain = 'https://phillfromgchq.co.uk/';
  $copyright = 'Design (c) 2016 by Katharsisdrill - email: katharsisdrill@phillfromgchq.co.uk';
  
  // STATIC PAGES
  
  // this array contains the static pages - I know it is not the perfect solution for a non-technical person but it is made to make the site as versatile as possible. If not used there will still always be a view page. As default there are a 'support' and an 'about' page. for each language a new page has to be made named $la-$page - so the English about-page will be named thus: en-about.php
  
  $static_pages = ['support','about'];
  

  // LANGUAGES
  
  // this variable sets the available languages. The array elements should correspond to the names of the folders in the images/pages folder, and there should be created file for the specific languages interface - called interface_$la.php - thus the english interface file should be: 'interface_en.php'
  
  $available_languages = ['en','de','fr','da']; // The first language will be used as default language.
  $language_names = ['English','Deutsch','Français','Dansk'];
  $def_lang = $available_languages[0];
  
  
    // OPEN GRAPH IMAGES
    
  $ogimage = 'Phill_1200_630.png';
  $ogtwitimage = 'Phill_portrait.jpg';
  
  
  // THIS AND THAT
  
  
  
  $cryptocoins = '<div class="billedgruppe"><img src="images/other/bitcoin.png"></div>
<div class="billedgruppetekst">Bitcoin</div>
<div class="billedgruppeindhold">18gemkcGg5sWvcxRE7EZezqrpWPRfdttzJ</div>

<div class="billedgruppe"><img src="images/other/ether.png"></div>
<div class="billedgruppetekst">Ethereum</div>
<div class="billedgruppeindhold">0x0f92f8b700dceF61ceb0a496A361D31A0be12B5b</div>

<div class="billedgruppe"><img src="images/other/steem.png"></div>
<div class="billedgruppetekst">Steem</div>
<div class="billedgruppeindhold"><a href="https://steemit.com/@katharsisdrill" target="_blank">https://steemit.com/@katharsisdrill</a></div>'


  
  
  



?>