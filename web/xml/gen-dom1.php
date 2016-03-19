<?php

$dom = new DOMDocument('1.0');

$lib = $dom->appendChild($dom->createElement('bibliotheque'));

$book = $lib->appendChild($dom->createElement('livre'));


$title = $book->appendChild($dom->createElement('title'));


$title->appendChild($dom->createTextNode('Les fleurs du mal'));
$title->setAttribute('edition', '3');


$author = $book->appendChild($dom->createElement('author'));

$author->appendChild($dom->createTextNode('Baudelaire'));

$Charles = $book->appendChild($dom->createElement('author'));
$Charles->appendChild($dom->createTextNode('Charles'));



header('Content-Type: text/xml');
echo $dom->saveXML();
