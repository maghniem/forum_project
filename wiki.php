<?php

require_once('utils.php');
require_once ('menu.php');
$cssFiles[] = 'wiki.css';
$cssFiles[] = 'menu.css';
$cssFiles[] = 'body.css';

define ('PAGEDIR', dirname(__FILE__));
$page = isset($_GET['page']) ? $_GET['page'] : 'wiki-main.xml';

$xmlDoc = new DOMDocument;
$xmlDoc->load(PAGEDIR .'/wiki-main.xml');
$tags = $xmlDoc->documentElement; //gets all elements from .xml

foreach ($tags->childNodes AS $tag)
  if (strcmp($tag->nodeName, "title")==0){
    $title = $tag->nodeValue;
    outputXHTMLHdr($title, $cssFiles);
    outputMenu('wiki');
    echo <<<fileToPage
    <div id="content">\n
      <div id="epage" align="right">
        <form method="post" action="wikiedit.php">
          <input type="hidden" name="page" value="<?php echo htmlentities($page);?>" />       
          <input type="submit" value="EDIT" />
        </form>
      </div>
fileToPage;
  }else if (strcmp($tag->nodeName, "#text") !=0){
    echo <<<fileToPage
    <div id="$tag->nodeName">
      <table border="0">
        <tbody><tr>
          <td id="title"><h3>
fileToPage;

    $heading=(strcmp($tag->nodeName,"Summary")==0) ? $title : $tag->nodeName;
//<td id="edit">[ <a href="wikie.php">Edit</a> ]</td>
    echo <<<fileToPage
            $heading</h3></td>
        </tr></tbody>
      </table>
      <p>$tag->nodeValue</p>
      <p align="right"><a href="#Summary">[ Back to Top ]</a></p>
    </div>\n<hr />\n
fileToPage;

  }
  echo "</div>";
  echo "<div id=\"toc\">\n<p align=\"center\">Contents</p><ol>";
  foreach ($tags->childNodes as $tag){
    if ((strcmp($tag->nodeName, "title") != 0) && (strcmp($tag->nodeName, "#text") !=0))
      echo "<li><a href=\"#".$tag->nodeName."\">".$tag->nodeName."</a></li>\n";
  }
  echo "</ol></div>";
  outputXHTMLFtr();


?>
