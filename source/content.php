<div class="a inv" name="tobeshowed" id="ACanaSiFaFesta1">
  <?php foreach ($record as $key => $title) {
    echo '<h2 class="titles">' . strtoupper($title['titolo']) . '</h2>';
  } ?>
  <h2 class="titles"></h2>
  <div id="list" style="font-size: 24px;"><p ><?php $myfile = fopen("songs/testi/ACanaSiFaFesta.txt", "r") or die("Unable to open file!");echo nl2br(fread($myfile,filesize("songs/testi/ACanaSiFaFesta.txt")));fclose($myfile); ?></p></div>
</div>
