<?php 
  /*  
    This is the template for the header
    @package mediplus
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if(is_singular() && pings_open(get_queried_object())) : ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php endif; ?>
  <!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
		
		<!-- Mediplus CSS -->
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/normalize.css">
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/style.css">
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/responsive.css">

  <?php wp_head(); ?>
   
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
