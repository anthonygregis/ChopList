<?php
use voku\helper\HtmlDomParser;

require_once 'vendor/autoload.php';

echo voku\helper\HtmlDomParser::file_get_html('http://nopixel.online/morbrowser/chop-list-database/')->plaintext;
?>
