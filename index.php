<?php
use voku\helper\HtmlDomParser;

require_once 'vendor/autoload.php';

voku\helper\HtmlDomParser::file_get_html('http://nopixel.online/morbrowser/chop-list-database/')->$html;

$pattern = "/<h3>(.*?)<\/h3>/";
preg_match_all($pattern, $html, $matches);
return ($matches[1]);

?>
