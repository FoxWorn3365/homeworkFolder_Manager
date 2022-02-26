<?php
$query = str_replace("%20", " ", $_GET["load"]);

if (!is_dir("Patreon/$query")) {
  die("ERROR 404 -> Not found!");
}

// Ok, ora che esiste carichiamo tutte le immagini della sequenza type.1 n1
foreach (glob("Patreon/$query/*.jpg") as $file) {
  $filename = str_replace("Patreon/$query/", "", $file);
  $sequenceLoad = explode("_", $filename);
  $lastSequence = count($sequenceLoad) - 1;
  // Recuperiamo il numero seriale 
  $serialNumberOfSequence = $sequenceLoad[$lastSequence - 1];
  // Ok, ora che abbiamo questa recuperiamo i dati precedenti e formiamo una query
  for ($a = $lastSequence - 2; $a > -1; $a - 1) {
    $string = "$string$sequenceLoad[$a]";
  }
  
  die(echo $string);
}
