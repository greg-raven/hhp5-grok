<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hhp
 */

?>
<!DOCTYPE html>
<html lang="en-US" class="js no-svg">
<head>

<?php
	get_template_part( 'inc/hhpmetatags');
	wp_head();
?>

</head>

<body <?php body_class(); ?>>

<?php get_template_part( 'inc/hhpheader'); ?>

<div class="container-fluid"><!-- closed in sidebar.php -->
	<div class="row"><!-- closed in sidebar.php -->
		<div class="col-md-7 col-md-push-3"><!-- closed in sidebar.php -->
			<ol class="breadcrumb">
				<li><a href="https://www.historiography-project.com"><i class="glyphicon glyphicon-home"></i></a></li>
				<li class="active">Clippings and Commentary</li>
			</ol>
			<div id="content" class="site-content"><!-- closed in footer.php -->

