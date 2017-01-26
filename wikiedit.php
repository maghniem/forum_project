<?php 

require_once('utils.php');
require_once ('menu.php');
$cssFiles[] = 'wiki.css';
$cssFiles[] = 'menu.css';
$cssFiles[] = 'body.css';

define ('PAGEDIR', dirname(__FILE__));
$doc = PAGEDIR.'/wiki-main.xml';
//print_r ($doc);
//print_r ($_POST);

if (isset($_POST['savecontent'])){
  $fp = fopen ($doc, 'w');
  if ($fp){
    fwrite ($fp, $_POST['$contents']);
    fclose ($fp);
  }
  redirect('wiki.php');
}  

$xmlDoc = new DOMDocument;
$xmlDoc->load($doc);
$tags = $xmlDoc->documentElement; //gets all elements from .xml

outputXHTMLHdr ('Windsor WIKI --- EDIT', $cssFiles);
outputMenu('wiki');
echo "<div id=\"content\">";
if (strcmp($tags, '') == 0) {
  echo <<<newpagemsg
  <p>This page does not exist. To create this page, fill out the form below and click "Save".</p>
newpagemsg;
} else {

  foreach ($tags->childNodes as $tag) {
    if (strcmp($tag->nodeName, "#text")!=0)
      $fcontent .= '<'.$tag->nodeName.">".$tag->nodeValue.'</'.$tag->nodeName.">\n";
  }    

}

echo '  <form method="post" action="'.$_SERVER['PHP_SELF'].'">';
echo '    <textarea name="contents" rows="20" cols="80">'.$fcontent;
echo <<<fileToPage
      </textarea><br />
      <input type="reset" value="Reset" />
      <input type="submit" name="savecontent" value="Save" />
    </form>
  </div>
fileToPage;

outputXHTMLFtr();

?>
