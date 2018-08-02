<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TMORE</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo site_url('assets/') ?>lib/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo site_url('assets/') ?>lib/fontAwesome/css/font-awesome.min.css">
	<!-- lightbox.css -->
	<link rel="stylesheet" href="<?php echo site_url('assets/') ?>lib/lightbox/css/lightbox.min.css">
	<!-- owl-carousel.css -->
	<link rel="stylesheet" href="<?php echo site_url('assets/') ?>lib/owl-carousel/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo site_url('assets/') ?>lib/owl-carousel/css/owl.theme.default.min.css">
	<!-- _main.scss -->
	<link rel="stylesheet" href="<?php echo site_url('assets/') ?>sass/style.css">

    <script src="<?php echo site_url('assets/') ?>lib/jquery/jquery.min.js"></script>
	<script src="<?php echo site_url('assets/') ?>lib/bootstrap/js/bootstrap.min.js"></script>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="<?php echo site_url('assets/') ?>img/favicon.png"/>
</head>

<body>

<header class="header">
	<div class="container">
		<div class="item" id="logo">
			<a href="<?php echo base_url('') ?>">
				<img src="<?php echo site_url('assets/img/logo.png') ?>" alt="logo TMORE">
			</a>
		</div>
		<div class="item visible-xs" id="expand-nav">
			<a href="" class="btn-nav-expand" role="button" id="btn-nav-expand">
				<span class="nav-icon"></span>
			</a>
		</div>
		<div class="item" id="nav-main">
			<ul>
				<li>
					<a href="#about">
						Giới thiệu
					</a>
				</li>
				<li>
					<a href="#benefit">
						Lợi ích
					</a>
				</li>
				<li>
					<a href="#commitment">
						Cam kết
					</a>
				</li>
				<li>
					<a href="#content">
						Nội dung
					</a>
				</li>
				<li>
					<a href="#register" class="btn btn-primary" role="button">
						Đăng ký
					</a>
				</li>
			</ul>
		</div>
	</div>
</header>
