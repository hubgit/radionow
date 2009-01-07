<ul id="stations">
  <?php foreach ($stations as $station):?>
    <li><a href="<?php print $_SERVER['SCRIPT_URI']; ?>?station=<?php print $station; ?>"><?php print $station; ?></a></li>
  <?php endforeach; ?>
</ul>