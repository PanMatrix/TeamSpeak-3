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

        <meta name="description" content="OneUI - Admin Dashboard Template & UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
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

</br>
</br>
 <center><div class="alert alert-warning">
<i class="fa fa-fw fa-warning"></i> <span class="font-w600">Witaj użytkowniku aktualnie na tej podstronie są prowadzone prace techniczne!</span>
</div></center>

</br>
</br>
<div class="container" style="margin-top: 30px;">
		<div class="row">
           <div class="col-md-12">
				<h1 class="page-title">Regulamin Serwera</h1>
				<div class="separator-2"></div>
			</div>
        </div>
		<p>
			</p><center><strong>§ INFORMACJE</strong></center>
			<br>
			§1. Użytkownicy nie podważają zdania administracji.<br>
			§2. Przebywając na naszym serwerze zgadzasz się na wszystkie warunki regulaminu.<br>
			§3. Użytkownik ma zakaz wchodzenia na kanał prywatny innego użytkownika bez jego zgody.<br>
			§4. Zabrania się "skakania" po kanałach.<br>
			§5. Zabrania się używania obraźliwych, wulgarnych, rasistowskich nicków i nazw kanałów.<br>
			§6. Nie wolno obrażać w jakikolwiek sposób innych użytkowników.<br>
			§7. Zabrania się prowokowania do kłótni.<br>
			§8. Nagrywanie rozmów i puszczanie muzyki na kanałach publicznych, oraz na kanałach prywatnych bez zgody właściciela kanału są zakazane. <br>
			§10. Zabronione jest spamowanie na serwerze.<br>
			§11. Użytkownik ma prawo posiadać maksymalnie 5 ikonek/rang nie licząc channel admina, rang wiekowych oraz weryfikacyjnych typu zarejstrowany zarejstrowana.<br>
			<br>
			<center><strong>§ ZASADY OGÓLNE</strong></center>
			<br>
			§1. Zabronione jest używanie nazw:<br>
			a) Wulgarnych, obraźliwych, rasistowskich, nazistowskich, nieetycznych;<br>
			b) Zawierających ciąg tych samych znaków bądź krótszych niż 3 znaki;<br>
			c) TeamSpeakUser (domyślnej nazwy);<br>
			d) Podszywających się pod osoby z wyższej administracji serwera Team Speak 3<br>
			§2. Zabronione jest używania awatarów zawierających treści erotyczne, wulgarne, rasistowskie, nazistowskie, nieetyczne bądź obraźliwe.<br>
			§3. Zabronione jest reklamowanie innych serwerów głosowych, serwerów gier, stron internetowych, for, itd.
			§4. Zabronione jest nagminne zmienianie nazw użytkownika.<br>
			§5. Zabronione jest podszywanie się pod kogoś, posiadanie takiej samej nazwy użytkownika w celu żartu.<br>
			§6. Zabronione jest wysyłanie w wiadomościach linków przekierowujących na niebezpieczne strony lub aplikacje.<br>
			§7. Zabronione jest używanie czatu ogólnego. Nie tyczy się właściciela serwera.<br>
			§8. Zabronione jest spamowanie poke'ami bądź whisper'ami.<br>
			§9. Na serwerze staramy się pisać zgodnie z zasadami zachowania poprawnej polszczyzny, w sposób zrozumiały dla osób przebywających na serwerze.<br>
			§10. Zabronione jest podszywanie się pod admina.<br>
			§11. Zabronione jest ustawianie sobie dziwnych prefiksów bądź przedrostków, które są używane przy danej grupie rang.<br>
			§12. Zabranione jest używanie VPN lub Proxy aby połączyć się z serwerem<br>
			§13. Zabronione jest używanie modulatora przez użytkowników<br>
			§14. Właściciel ma prawo do zbanowania osoby bez powodu.<br>
			§15. Zdanie własciciela jest niepodważalne.<br>
			§16. Administrator może być tylko w administracji na jednym serwerze teamspeak<br>
			<br>
			<center><strong>§ KANAŁY GLOBALNE</strong></center>
			<br>
			§1. Zakaz nagrywania rozmów na kanałach globalnych bez zgody osób, które na nim przesiadują. Nie tyczy się to kanałów, które posiadają zgodę na nagrywanie w opisie.<br>
			§2. Zakazane jeszcze puszczanie muzyki bez zgody osób przebywających na kanale.<br>
			§3. Kanały globalne są podzielone na te z limitem osób oraz na takie, które tego limitu nie posiadają.<br>
			§4. Łamanie zasad regulamin na kanałach globalnych skutkuje interwencją admina i wyrzuceniem danej osoby z kanału.<br>
			§5. Kanały globalne są prze<br>znaczone dla osób korzystających z serwera TeamSpeak3. Głównie dla osób nie posiadających własnych kanałów.<br>
			<br>
			<center><strong>§ KANAŁY PRYWATNE</strong></center>
			<br>
			§1. Kanały prywatne mogą posiadać maksymalnie trzy podkanały.<br>
			§2. Każdy użytkownik może posiadać maksymalnie jeden kanał prywatny.<br>
			§3. Zakazane jest zmienianie opisu (deskrypcji) kanału. Zmiana ta grozi usunięciem kanału.<br>
			§4. Brak numeru kanału lub zmiana go, grozi usunięciem kanału.<br>
			§5. Nazwa kanału nie może zawierać wulgaryzmów, treści rasistowskich, obraźliwych. Grozi to usunięciem kanału i zbanowaniem jego właściciela.<br>
			§6. Osoba korzystająca z kanałów prywatnych jest zobowiązana do przestrzegania regulaminu serwera TeamSpeak3.<br>
			§7. Za atmosferę na kanale odpowiada jego właściciel, a nie admin serwera TeamSpeak3.<br>
			§8. Każdy kanał nie posiadający hasła, staje się kanałem publicznym do którego może wejść każdy.<br>
		<p></p>
		<div class="pull-right"><i>Copyright by <?php echo $name; ?> </i></div>
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
<script src="/assets/js/core/kontakt.js"></script>
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