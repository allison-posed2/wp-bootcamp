<?php

  $the_title = 'Our Blog';
  $the_content = 'We make widgets!';

  $posts = array(
    array(
      'the_title' => 'Entry 1',
      'the_content' => 'Selvage drinking vinegar vinyl McSweeney\'s Intelligentsia iPhone, photo booth sriracha trust fund sartorial shabby chic hella aesthetic artisan. Small batch Vice Odd Future, four loko sriracha tilde +1 keffiyeh swag 90\'s fingerstache food truck beard. YOLO hoodie before they sold out pour-over, keffiyeh organic Marfa lo-fi asymmetrical master cleanse messenger bag sartorial Blue Bottle Pinterest Thundercats.'
    ),
    array(
      'the_title' => 'Entry 2',
      'the_content' => 'Narwhal twee Thundercats, plaid chia hashtag flexitarian quinoa PBR Godard disrupt. 90\'s Odd Future sriracha organic, iPhone Blue Bottle Tumblr Thundercats cray post-ironic cornhole brunch taxidermy. Aesthetic asymmetrical irony, narwhal High Life keytar Wes Anderson banjo single-origin coffee pickled squid. Brooklyn try-hard fanny pack, Portland artisan Williamsburg Pinterest Carles.'
    ),
    array(
      'the_title' => 'Entry 3',
      'the_content' => 'Cronut try-hard PBR gluten-free, slow-carb mixtape hashtag Etsy Portland tofu jean shorts. Narwhal fixie actually locavore beard. Shabby chic Tumblr you probably haven\'t heard of them, meggings keffiyeh aesthetic single-origin coffee +1 authentic. Fashion axe keytar pop-up, forage freegan synth retro four dollar toast Williamsburg sustainable'
    )
  );

?>

<html>
<head>
  <title><?php echo $the_title; ?></title>
</head>
<body>
  <?php include 'includes/navigation.php'; ?>
  <div>
    <h1><?php echo $the_title ?></h1>
    <?php foreach($posts as $post) { ?>
      <h2><?php echo $post['the_title']; ?></h2>
      <p><?php echo $post['the_content']; ?></p>
    <? } ?>
    <p><?php echo $the_content; ?></p>
  </div>
</body>
</html>