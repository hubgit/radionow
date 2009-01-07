<?php 
header('HTTP/1.0 300 Multiple Choices'); 
header('Content-Type: text/html');
?>
<html>
<head>
  <title>Radio Now</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="initial-scale=1.0; user-scalable=no;">
</head>
<body>

<?php include 'stations.php'; ?>    
    
</body>
</html>
<?php exit(); ?>