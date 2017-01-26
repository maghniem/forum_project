<?php

/*  By Cezar Batto
      - this page takes locations.xml and transforms 
        it using locationsxslt.xsl
      - this page is accessed from the menu, so it
        you to the first location in the locations.xml
        file, and you can navigate through the rest
      - based off of Mr. Preneys lecture 06 example
        but minor changes for our site.
*/

require ('utils.php');
require ('menu.php');
$cssfiles[] = 'menu.css';
$cssfiles[] = 'bodylocations.css';
outputXHTMLHdr('Pictures', $cssfiles);
outputMenu('locs');



$xmlFile = new DOMDocument();
$xmlFile->load('locationspage.xml');

$xslFile = new DOMDocument();
$xslFile->load('locationsxslt.xsl');

$proc = new XSLTProcessor();

$PlaceID = !isset($_GET['id']) ? 'Parks' : $_GET['id'];

$proc->setParameter('', 'showplace', $PlaceID);
$proc->importStylesheet($xslFile);

echo $proc->transformToXML($xmlFile);


outputXHTMLFtr();
?>
