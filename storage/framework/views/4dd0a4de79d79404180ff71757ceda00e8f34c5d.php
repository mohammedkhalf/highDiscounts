<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora Demo</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
<?php echo e(Html::style('front/css/bootstrap.min.css')); ?>


<!-- Font Awesome -->
<?php echo e(Html::style('front/css/font-awesome.min.css')); ?>


<!-- Custom CSS -->


    <?php echo e(Html::style('front/css/owl.carousel.css')); ?>

    <?php echo e(Html::style('front/style.css')); ?>

    <?php echo e(Html::style('front/css/responsive.css')); ?>

    <?php if(lang() == 'ar'): ?>
        <?php echo e(Html::style('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css')); ?>

    <?php endif; ?>

    <link rel="icon" href="<?php echo e(Storage::url(sett()->icon)); ?>">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
