<?php

  $the_title = 'About Our Company';
  $the_content = 'An entirely different set of content.';

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