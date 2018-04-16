<div class="sidebar block" style="width:20%">
  <h3 class="text mt10px mb25px">Lista Completa</h3>
  <?php foreach ($titoli as $titolo => $record): ?>
    <div class="Drop">
      <button name="dropdown" class="button item"><div style="margin-left:5%"><?php echo ucfirst($titolo); ?></div></button>
        <div class="ContDrop" name="dropdowntobedisplayed">
          <?php foreach ($record as $key => $title) {
            echo '<div class = "a"><a class="item button" name="show" data-link="' . $title['link'] . '">' . $title['titolo'] . '</a></div>';
          } ?>
        </div>
    </div>
  <?php endforeach; ?>
</div>
