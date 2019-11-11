<?php
	require_once('include/config.php');
	require_once('stats.php');
?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title><?php echo $title; ?></title>

        <meta name="description" content="">
        <meta name="author" content="iHous_187">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/highlightjs/github-gist.min.css">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.min.css">
        <!-- END Stylesheets -->
    </head>
    <body>
<?php
    require_once "include/header.php"; 
?>


<ul class="nav-header pull-left">
<li class="header-content">
<a class="h5" href="">
<img src="assets/img/various/logo.png" height="60" width="80" style="position: relative; bottom: 8px;">
<span class="h4 font-w400 text-white"><?php echo $header; ?></span>
</a>
</li>
</ul>

</div>
</header>


<main id="main-container">

<div class="bg-image" style="background-image: url('assets/img/various/tlo.jpg');">

<div class="bg-primary-dark-op">
<section class="content content-full content-boxed overflow-hidden">

<div class="push-100-t push-50 text-center">
<h1 class="h2 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">
<img src="assets/img/various/logo.png" height="171" width="312"></h1>
<h2 class="h2 text-white-op push-50 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Nowy wymiar komunikacji!</h2>
<a class="btn btn-rounded btn-noborder btn-lg btn-primary visibility-hidden" data-toggle="appear" data-class="animated bounceIn" data-timeout="800" href="ts3server://<?php echo $adres; ?>"><i class="fa fa-fw fa-bolt push-5-r"></i>Połącz się</a>
</div>

</section>
</div>
</div>

<div class="bg-white">
<section class="content content-boxed">

<div class="row items-push-2x push-50-t nice-copy">
<div class="row items-push text-center push-50">
<div class="col-xs-4 col-md-2 visibility-hidden" data-toggle="appear" data-offset="-100" data-class="animated bounceIn">
<div class="item item-circle bg-white border push-10">
<i class="si si-briefcase text-default"></i>
</div>
<div class="font-w600">Lorem ipsum dolor sit amet.</div>
</div>
<div class="col-xs-4 col-md-2 visibility-hidden" data-toggle="appear" data-offset="-100" data-class="animated bounceIn" data-timeout="150">
<div class="item item-circle bg-white border push-10">
<i class="si si-badge text-flat"></i>
</div>
<div class="font-w600">Lorem ipsum dolor sit amet.</div>
</div>
<div class="col-xs-4 col-md-2 visibility-hidden" data-toggle="appear" data-offset="-100" data-class="animated bounceIn" data-timeout="300">
<div class="item item-circle bg-white border push-10">
<i class="si si-chemistry text-smooth"></i>
</div>
<div class="font-w600">Lorem ipsum dolor sit amet.</div>
</div>
<div class="col-xs-4 col-md-2 visibility-hidden" data-toggle="appear" data-offset="-100" data-class="animated bounceIn" data-timeout="450">
<div class="item item-circle bg-white border push-10">
<i class="si si-heart text-city"></i>
</div>
<div class="font-w600">Lorem ipsum dolor sit amet.</div>
</div>
<div class="col-xs-4 col-md-2 visibility-hidden" data-toggle="appear" data-offset="-100" data-class="animated bounceIn" data-timeout="600">
<div class="item item-circle bg-white border push-10">
<i class="si si-clock text-modern"></i>
</div>
<div class="font-w600">Lorem ipsum dolor sit amet.</div>
</div>
<div class="col-xs-4 col-md-2 visibility-hidden" data-toggle="appear" data-offset="-100" data-class="animated bounceIn" data-timeout="750">
<div class="item item-circle bg-white border push-10">
<i class="si si-graduation text-warning"></i>
</div>
<div class="font-w600">Lorem ipsum dolor sit amet.</div>
</div>
</div>
<div class="row items-push">
<div class="col-sm-6">
<h3 class="h5 font-w600 text-uppercase push-10"><i class="fa fa-check text-primary push-5-r"></i> Lorem ipsum dolor sit amet.</h3>
<p>Lorem ipsum dolor sit amet.</p>
</div>
<div class="col-sm-6">
<h3 class="h5 font-w600 text-uppercase push-10"><i class="fa fa-check text-primary push-5-r"></i> Lorem ipsum dolor sit amet.</h3>
<p>Lorem ipsum dolor sit amet.</p>
</div>
</div>


</section>
</div>


<div class="bg-gray-lighter">
<section class="content content-boxed">

<div class="row items-push push-20-t push-20 text-center">
<div class="col-sm-6 col-lg-3">
<i class="fa fa-map-marker fa-2x" data-toggle="appear" data-class="animated bounceIn"></i>
<div class="h1 push-5" data-toggle="countTo" data-to="<?php echo round ("$ping"); ?>"></div>Ms
<div class="font-w600 text-uppercase text-muted">Ping</div>
</div>
<div class="col-sm-6 col-lg-3">
<i class="fa fa-users fa-2x" data-toggle="appear" data-class="animated bounceIn"></i>
<div class="h1 push-5" data-toggle="countTo" data-to="<?php echo "$online"; ?>"></div>Użytkowników
<div class="font-w600 text-uppercase text-muted">Online na serwerze</div>
</div>
<div class="col-sm-6 col-lg-3">
<i class="fa fa-calendar fa-2x" data-toggle="appear" data-class="animated bounceIn"></i>
<div class="h1 push-5" data-toggle="countTo" data-to="<?php echo "$uptime"; ?>"></div>Uptime
<div class="font-w600 text-uppercase text-muted">Serwera</div>
</div>
<div class="col-sm-6 col-lg-3">
<i class="fa fa-comments fa-2x" data-toggle="appear" data-class="animated bounceIn"></i>
<div class="h1 push-5" data-toggle="countTo" data-to="<?php echo "$channels"; ?>"></div>Aktywnych
<div class="font-w600 text-uppercase text-muted">Kanałów</div>
</div>
</div>

</section>
</div>


</section>
</div>





</section>
</div>

</main>

</br>
<center></br></br></br><div><strong><font size="5">Partnerzy</strong></div></font><center>
</br>
<marquee behavior="scroll" align="center" direction="left" speed="1.5" scrollamount="15" scrolldelay="20" onmouseover="this.stop()" onmouseout="this.start()" style="height: 100px;" height="70">
			<center>
                      
					  <?php echo $partners1; ?>
					  <?php echo $partners2; ?>
					  <?php echo $partners3; ?>
					  <?php echo $partners4; ?>
					  <?php echo $partners5; ?>
			


			</center>
			</marquee>
                         

<?php
    require_once "include/footer.php"; 
?>

        <!-- OneUI Core JS -->
        <script src="assets/js/oneui.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/highlightjs/highlight.pack.js"></script>

<script src="/assets/js/core/jquery.min.js"></script>
<script src="/assets/js/core/bootstrap.min.js"></script>
<script src="/assets/js/core/jquery.slimscroll.min.js"></script>
<script src="/assets/js/core/jquery.scrollLock.min.js"></script>
<script src="/assets/js/core/jquery.appear.min.js"></script>
<script src="/assets/js/core/jquery.countTo.min.js"></script>
<script src="/assets/js/core/jquery.placeholder.min.js"></script>
<script src="/assets/js/app.js"></script>

<script>
            jQuery(function () {
                // Init page helpers (Appear + CountTo plugins)
                window.scrollTo(window.scrollX, window.scrollY - 1);
                App.initHelpers(['appear', 'appear-countTo']);
            });
        </script>
</body>
</html>