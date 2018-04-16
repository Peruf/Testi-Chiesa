<?php
  $basedir = dirname(__DIR__);
  $titoli = [];
  $i = 0;
  if(($handle = fopen($basedir . '/songs/titoli/titoli.csv','r')) !== false) {
    while(($data = fgetcsv($handle, 1000, ';', '"')) !== false) {
      if($i !== 0) {
        /*divido il mio array per categorie*/
        $titoli[$data[3]][] = [ 'titolo' => $data[1], 'link' => $data[2]];
      }
      $i++;
    }
  }
