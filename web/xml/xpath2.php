<?php

$dom = new DOMDocument;
$dom->load(__DIR__ . '/formations.xml');
$xpath = new DOMXPath($dom);
?>
<meta charset="UTF-8"/>
<?php
$noms = $xpath->query("/formations/formation/[count(module)< 3]/titre");


foreach($noms as $nom){
    echo $nom->nodeValue."<br/>";
}
