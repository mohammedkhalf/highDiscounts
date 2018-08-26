<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Electro &#8211; Electronics Ecommerce Theme</title>

    <?php if(lang() == 'ar'): ?>
        <?php echo e(Html::style('front/assets/css/bootstrap-rtl.min.css')); ?>



    <?php else: ?>
        <?php echo e(Html::style('front/assets/css/bootstrap.min.css')); ?>


    <?php endif; ?>
    <?php echo e(Html::style('front/assets/css/font-awesome.min.css')); ?>

    <?php echo e(Html::style('front/assets/css/animate.min.css')); ?>

    <?php echo e(Html::style('front/assets/css/font-electro.css')); ?>

    <?php echo e(Html::style('front/assets/css/owl-carousel.css')); ?>

    <?php if(lang() == 'ar'): ?>
    <?php echo e(Html::style('front/assets/css/rtl.min.css')); ?>

    <?php else: ?>

    <?php echo e(Html::style('front/assets/css/style.css')); ?>

    <?php endif; ?>

    <?php echo e(Html::style('front/assets/css/colors/yellow.css')); ?>


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic'
          rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" href="<?php echo e(url('front/assets/images/fav-icon.png')); ?>">
</head>

<body class="home-v2">