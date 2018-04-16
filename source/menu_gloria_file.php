  <div class="ContDrop" name="dropdowntobedisplayed">
    <?php
      $basedir = dirname(__DIR__);
      $titoli = fopen($basedir . '/songs/titoli/titoli_gloria.txt','r');
      if ($titoli) {
        while (($line = fgets($titoli)) !== false) {
            echo '<div class = "a"><a class="item button" name="show">' . $line . '</a></div>';
        }
        fclose($titoli);
      }
    ?>
  </div>
