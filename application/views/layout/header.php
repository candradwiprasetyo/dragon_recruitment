<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="<?= base_url('assets/images/favicon.ico') ?>" type="image/x-icon" rel="shortcut icon">
    <title><?= ucwords($data['title']). " - One-stop platform for hiring creative arts talent in Indonesia | 8bulbs.co" ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?= base_url('assets/css/bootstrap-theme.min.css') ?>" rel="stylesheet">
	<!-- My Style -->
	<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
    <!-- showcase-->
    <link href="<?= base_url('assets/css/showcase/demo.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/showcase/component.css') ?>" rel="stylesheet">
    <!-- slider -->
    <link href="<?= base_url('assets/css/slider/slider.css') ?>" rel="stylesheet">
    <!-- carousel -->
    <link href="<?= base_url('assets/css/carousel/carousel.css') ?>" rel="stylesheet">
    
    <script type="text/javascript" src="<?= base_url('assets/js/slider/jssor.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/slider/jssor.slider.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/slider/slider.js') ?>"></script>
    <!-- select -->
    <link href="<?= base_url('assets/css/select/bootstrap-select.css') ?>" rel="stylesheet" type="text/css" >
    <!-- font-awesome -->
    <link  href="<?= base_url('assets/css/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- modal -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/modal/default.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/modal/component.css') ?>" />
    <script src="<?= base_url('assets/js/modal/modernizr.custom.js') ?>"></script>
   
	
     <script src="<?= base_url('assets/js/jquery.js') ?>"></script>

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70612312-1', 'auto');
  ga('send', 'pageview');

</script>
  </head>

  <body role="document">

<div class="col-md-12" style="padding:0px; ">
<div class="col-md-9" style="padding:0px; ">
<div class="navbar navbar-default navbar-static-top" role="navigation" id="navbar1" style="background: #477CBD !important;">
      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
          <a class="navbar-brand" id="navbar_brand_resize" href="<?=site_url('')?>"> <img src="<?php echo base_url('assets/images/logo_trans.png'); ?>" /></a>
        </div>
        <div class="navbar-collapse collapse" style="background: #477CBD !important;">
         
         <ul class="nav navbar-nav navbar-menu">
            <li class="active"><a href="<?=site_url('showcase')?>">Showcase</a></li>
            <li><a href="<?=site_url('creative')?>">creatives</a></li>
            <li><a href="<?=site_url('news')?>">News</a></li>
            <li><a href="<?=site_url('workshop')?>">Events</a></li>
            
          </ul>
          
        </div>
     
    </div>
</div>

<div class="col-md-3" style="padding:0px;">
	<div class="navbar navbar-default navbar-static-top navbar-login" role="navigation" style="background:#2a5da8">
     	
        <?php
		if($this->session->userdata('logged')){
        $data_user = $this->access->get_data_user($this->session->userdata('user_id'));
		?>
        <ul class="nav navbar-nav navbar-nav-login" style="float:none">
            <li><a href="<?=site_url('profile'); ?>">Hi, <?= $data_user['user_name'] ?></a></li>
            
            <?php
            if($this->session->userdata('user_type_id')==2){
			?>
            <li><a href="<?=site_url('profile/logout')?>">Logout</a></li>
            <?php
			}else{
			?>
             <li><a href="<?=site_url('account_regular/logout')?>">Logout</a></li>
            <?php
			}
			?>
            
            
          </ul>
        <?php
		}else{
		?>
         <ul class="nav navbar-nav navbar-nav-login" style="float:none">
            <li><a href="<?=site_url('login')?>">Login / Sign up</a></li>
            
          </ul>
     	<?php
		}
		?>
    </div>
</div>
</div>
<div style="clear:both"></div>


<div class="main_content" id="main_content">

   