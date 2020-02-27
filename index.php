<?php
use voku\helper\HtmlDomParser;

require_once 'vendor/autoload.php';

// Create DOM from string
$html = HtmlDomParser::file_get_html('http://nopixel.online/morbrowser/chop-list-database/');

$titles = array();
// Find all tags 
foreach($html->find($tagname) as $element) {
    $titles[] = $element->plaintext;
}

echo count($titles);
?>
