<?php

  $the_title = 'XYZ Manufacturing';
  $the_content = 'We make widgets!';

?>

<html>
<head>
  <title><?php echo $the_title; ?></title>
</head>
<body>
  <?php include 'includes/navigation.php'; ?>
  <div>
    <h1><?php echo $the_title ?></h1>
    <p><?php echo $the_content; ?></p>
  </div>
</body>
</html>