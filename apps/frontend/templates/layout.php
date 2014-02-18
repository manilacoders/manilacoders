<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <title><?php echo get_slot('page_title', 'ManilaCoders.com') ?></title>
    <link rel="shortcut icon" href="/favicon.ico" />

    <link href="<?php echo stylesheet_path('bootstrap.min.css') ?>" rel="stylesheet">
    <!-- include css -->
    <?php include_slot('page_css') ?>

    <!-- jquery -->
    <script src="<?php echo javascript_path('jquery.min.js') ?>"></script>
    
    <?php include_javascripts() ?>
  </head>
  <body>
    <?php echo $sf_content ?>
    
    <script src="<?php echo javascript_path('bootstrap.min.js') ?>"></script>
  </body>
</html>