<?php require 'functions.inc.php'; ?>
<html>
<head>
  <title>Radio Now<?php if ($xml) printf(': %s', (string) $xml['network']); ?></title>
  <link rel="stylesheet" href="style.css">
  <!--<script src="script.js"></script>-->
</head>
<body>
  
<?php foreach ($items as $pid => $item): $xml = $item['xml']; ?>
<div class="show" style="background: #fff url('http://www.bbc.co.uk/iplayer/images/episode/<?php print $pid; ?>_512_288.jpg') no-repeat">
  <div class="info">
    <h2 class="title"><a href="http://www.bbc.co.uk/programmes/<?php print $pid; ?>"><?php print (string) $xml->title; ?></a></h2>
    <div class="meta">
      <?php if (!empty($xml->parents)): ?>
        <!--<h2><a href="http://www.bbc.co.uk/programmes/<?php print (string) $xml->parents->parent['pid']; ?>"><?php print (string) $xml->parents->parent; ?></a></h2>-->
      <?php endif; ?>
      <div class="synopsis"><?php print (string) $xml->synopsis; ?></div>
      <div class="audio">
        <!--<a href="<?php print (string) $xml->links->link; ?>" class="listen" title="listen">&#x1D122;</a>-->
        <a href="http://www.bbc.co.uk/mobile/iplayer/index.html#episode/<?php print $pid; ?>">&#x2706;</a>
        <a href="http://www.bbc.co.uk/iplayer/console/<?php print $pid; ?>">&#x1D122;</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

<ul id="footer">
<?php include 'stations.php'; ?> 
</ul>   
</body>
</html>
