<?php
use voku\helper\HtmlDomParser;

require_once 'vendor/autoload.php';

voku\helper\HtmlDomParser::file_get_html('http://nopixel.online/morbrowser/chop-list-database/')->$html;

$tagname = "h3";

$titles = array();

// Find all tags 
foreach($html->find($tagname) as $element) {
    $titles[] = $element->plaintext;
}

echo count($titles);
?>
