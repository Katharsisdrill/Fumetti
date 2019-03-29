<?php


$current_language = findLanguageName($la, $available_languages, $language_names);

$dropdownarray = findDropdownLanguages($la,$available_languages);

// skal laves som loop så der kan føjes nye sprog til uden besvær
$language1 = findLanguageName($dropdownarray[0], $available_languages, $language_names);
$language2 = findLanguageName($dropdownarray[1], $available_languages, $language_names);
$language3 = findLanguageName($dropdownarray[2], $available_languages, $language_names);





echo '<div class="menu">

<div class="menu_left"><a href="' . $home . $phill . '&pa=view&la=' . $la . '"><img src="images/menu/' . $la . '/' . $la . '_Phill_menu_home.png" alt="" /></a><img src="images/menu/' . $la . '/' . $la . '_Phill_menu_hlanguage.png" alt="" />


</div>


<div class="menu_right"><a href="' . $home . $phill . '&pa=support&la=' . $la . '"><img src="images/menu/' . $la . '/' . $la . '_Phill_menu_support.png" alt="" /></a><a href="' . $home . $phill . '&pa=about&la=' . $la . '"><img src="images/menu/' . $la . '/' . $la . '_Phill_menu_about.png" alt="" /></a>
<div class="sm-buttons_first"><a href="mailto:katharsisdrill@phillfromgchq.co.uk"><img src="images/menu/Social_media_buttons/mail.png" title="'. $mail . '" /></a></div>
<div class="sm-buttons"><a href="' . $domain . 'rss.php?la=' . $la . '" target="_blank"><img src="images/menu/Social_media_buttons/rss.png" title="'. $rss . '" /></a></div>
<div class="sm-buttons"><a href="https://www.datataffel.dk/u/katharsisdrill" target="_blank"><img src="images/menu/Social_media_buttons/diaspora.png" title="'. $diaspora . '" /></a></div>
<div class="sm-buttons"><a href="https://steemit.com/@katharsisdrill" target="_blank"><img src="images/menu/Social_media_buttons/steem.png" title="'. $steemit . '" /></a></div>
<div class="sm-buttons"><a href="https://katharsisdrill.deviantart.com/" target="_blank"><img src="images/menu/Social_media_buttons/deviant.png" title="'. $deviantart . '" /></a></div>
<div class="sm-buttons"><a href="https://mastodon.art/@Katharsisdrill" target="_blank"><img src="images/menu/Social_media_buttons/gnusocial.png" title="'. $gnusocial . '" /></a></div>
<div class="sm-buttons"><a href="https://ko-fi.com/katharsisdrill" target="_blank"><img src="images/menu/Social_media_buttons/kofi.png" title="'. $kofi . '" /></a></div>
<div class="sm-buttons"><a href="https://en.liberapay.com/Katharsisdrill" target="_blank"><img src="images/menu/Social_media_buttons/liberapay.png" title="'. $liberapay . '" /></a></div>
<div class="sm-buttons_last"><a href="' . $home . '?phill=' . $phill . '&pa=support&la=' . $la . '#cryptocoin"><img src="images/menu/Social_media_buttons/bitcoin.png" title="'. $bitcoin . '" /></a></div>

</div>


</div>
<div class="dropbtn">

		<span class="current_language"><b>' . $current_language . '</b></span>
	<nav class="lang_menu">
	
            <p class="lang_choice"><a href="' . $home . $phill . '&pa=' . $pa . '&la=' . $dropdownarray[0] . '">' . $language1 . '</a></p>
            <p class="lang_choice"><a href="' . $home . $phill . '&pa=' . $pa . '&la=' . $dropdownarray[1] . '">' . $language2 . '</a></p>
            <p class="lang_choice"><a href="' . $home . $phill . '&pa=' . $pa . '&la=' . $dropdownarray[2] . '">' . $language3 . '</a></p>
            <img src="images/menu/dropdown_canvas_bund.png" alt="" />
	</nav>
</div>'

;

?>