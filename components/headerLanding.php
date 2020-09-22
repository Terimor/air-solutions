<?php header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html lang="en">
<!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('huamefartd69');
</script>
<!-- End of Async Drift Code -->
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- FONT-AWESOME -->
    <script src="https://kit.fontawesome.com/a5aa9bda3c.js" crossorigin="anonymous"></script>

    <!-- LOCAL ICONS -->
    <link rel="stylesheet" href="styles/assets/ei-icon.css">
    <link rel="stylesheet" href="styles/assets/themify-icons.css">

    <!-- OWL -->
    <link rel="stylesheet" href="js/owl-carrosel/owl.carousel.min.css">
    <link rel="stylesheet" href="js/owl-carrosel/owl.theme.default.min.css">

    <!-- OFFCANVAS -->
    <link rel="stylesheet" href="styles/offcanvas-menu.css">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="styles/assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="styles/animate.css">

    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <title>AirSolutions Group</title>
</head>
<?php
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $pages = ['index', 'about', 'business_model', 'faq', 'contacts', 'rules'];
    $whatPage = '';
    
    for ($i = 0; $i < 6; $i++) {
        if (strpos($actual_link, $pages[$i])) {
            $whatPage = $pages[$i];
        }
    }
    switch ($whatPage) {
        case 'index':
            $page = 'homePageOne';
            break;

        case 'about':
            $page = 'about-page';
            break;

        case 'business_model':
            $page = 'partner-page sub-page';
            break;

        case 'faq':
            $page = 'faq-page sub-page';
            break;
        case 'contacts':
            $page = 'contact-page';
            break;
        case 'rules':
            $page = 'blogSingle-page sub-page';
            break;
        default:
            $page = 'homePageOne';
            break;
    }
    function set_active ($a, $curr) {
        if ($curr === $a) {
            echo 'active';
        }
    }
    ?>
<body class="<?php echo $page; ?>">

    <div id="main-wrapper">
        <div id="box">
            <div class="top-bar hidden-sm hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="left-bar">
                                <ul>
                                    <li><img src="img/mail.png" alt=""> support@airsolutions.club</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="right-bar text-right">
                                <div class="country dropdown inline-block">
                                    <i class="fa fa-globe" aria-hidden="true"></i>
                                    Языки:

                                    <select name="one" class="dropdown-select">
                                        <option value="">Русский</option>
                                        <option value="1">English</option>
                                        <option value="2">China</option>
                                        <option value="3">Japan</option>
                                    </select>
                                </div>
                                <ul class="social-icon inline-block">
                                    <li><a target="_blank" href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- top-bar -->
        </div>
        <header class="header-section header-section-one">
            <div class="shadow-nav hidden-xs"></div>
            <nav class="navbar navbar-top navbar-inverse">
                <div class="container">
                    <div class="nav-p mobileFlex">
                        <div class="navbar-wrapper">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="index.php">
                                    <img class="fix-logo caption hidden-sm hidden-xs hidden-md" style="width: 210px;" src="img/startwhitelogo.png" alt="image">
                                    <img class="scroll-logo caption hidden-sm hidden-xs hidden-md" style="width: 210px;" src="img/StartCom-logo1.png" alt="image">
                                    <img class="caption-two visible-sm visible-xs" style="width: 175px;" src="img/startwhitelogo.png" alt="image">
                                </a>
                            </div>
                            

                            <div class="collapse navbar-collapse hidden-sm hidden-xs">
                                <ul class="nav navbar-nav">
                                    <li class="<?php set_active('index', $whatPage)?>"><a href="index.php"><i class="ei-home"></i> Главная</a></li>
                                    <li class="dropdown <?php set_active('about', $whatPage) ?>"><a href="about.php"><i class="ei-strategy"></i> О компании</li>
                                    <li class="<?php set_active('business_model', $whatPage) ?>"><a href="business_model.php"><i class="ei-panel-1"></i> Бизнес-модель</a></li>
                                    <li class="<?php set_active('faq', $whatPage) ?>"><a href="faq.php"><i class="ei-desk-lamp"></i> F.A.Q.</a></li>
                                    <li class="<?php set_active('contacts', $whatPage) ?>"><a href="contacts.php"><i class="fa fa-envelope-o"></i> Контакты</a></li>
                                    <div class="nav-kp"><a href="https://air-solutions-admin.herokuapp.com/sign-in" class="btn btn-primary"><i class="ei-log-in" aria-hidden="true" style="margin-right: 2px;"></i> Войти в кабинет</a></div>
                                </ul>
                            </div>
                        </div>
                        <span class="menu-toggle navbar visible-xs visible-sm"><i class="fa fa-bars" aria-hidden="true"></i></span>
                        <div class="nav-right-bar navbar-right hidden-sm hidden-xs">
                            <span><a href="https://air-solutions-admin.herokuapp.com/sign-in"><i class="ei-log-in" aria-hidden="true"></i> Войти в кабинет</a></span>
                        </div>
                    </div>
                </div>
            </nav>
        </header>