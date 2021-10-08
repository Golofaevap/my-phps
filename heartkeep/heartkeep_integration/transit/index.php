<?php
    setcookie("FBpixel", $_GET["fbpixel"], time()+60*60*24); 
    setcookie("GA1", $_GET["ga1"], time()+60*60*24); 

if (!isset($use_base)) {
    $use_base = false;
}

$site = file_get_contents('template.html', true);
if ($use_base) {
    $site = str_replace('<head>', '<head><base href="transit/">', $site);
}

echo $site;
