<?php
// cerchiamo insieme la robba buona
$query = str_replace("%20", " ", $_GET["query"]);

if (empty($query)) {
  echo "<h1>Index of Patreon/</h1><br><hr><br>";
  require_once("searchBar.php");
  foreach (glob("Patreon/*") as $file) {
    $filename = str_replace("Patreon/", "", $file);
    echo "<a href='Patreon/$filename/'>$filename</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href='wiewSequence?load=$filename'>[S]</a><br>";
  }
} else {
  echo "<h1>Index of Patreon/ filtered by $query</h1><br><hr><br>";
  require_once("searchBar.php");
  foreach (glob("Patreon/*") as $file) {
    $filename = str_replace("Patreon/", "", $file);
    if (stripos($filename, $query) !== false) {
      echo "<a href='Patreon/$filename/'>$filename</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href='wiewSequence?load=$filename'>[S]</a><br>";
    }
  }
} 
  
