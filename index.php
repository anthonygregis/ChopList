<?php
use voku\helper\HtmlDomParser;

require_once 'vendor/autoload.php';

voku\helper\HtmlDomParser::file_get_html('http://nopixel.online/morbrowser/chop-list-database/')->$html;

$dom = new DOMDocument();
$paragraphs = array();
$dom->loadHTML($html);
foreach($dom->getElementsByTagName('h3') as $node)
{

    $paragraphs[] = $dom->saveHTML($node);

}
print_r($paragraphs);
?>
