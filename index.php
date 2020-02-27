<?php
use voku\helper\HtmlDomParser;

require_once 'vendor/autoload.php';

echo voku\helper\HtmlDomParser::file_get_html('http://nopixel.online/morbrowser/chop-list-database/')->$string;

// Create DOM from string
$html = str_get_html($string);

$titles = array();
// Find all tags 
foreach($html->find($tagname) as $element) {
    $titles[] = $element->plaintext;
}

echo count($titles);
?>
