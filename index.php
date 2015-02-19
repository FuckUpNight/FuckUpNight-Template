<?php
$pages = array('index', 'impressum', 'datenschutz', 'organize', 'contribute', 'about', 'procedure', 'gallery');
$page = str_replace(array('/', '.html'), '', strtolower($_SERVER['REQUEST_URI']));
if (!in_array($page, $pages)) {
    if ($page != '')
       header("HTTP/1.1 404 Not Found");
       $page = 'index';
    }
    if ($page == 'index') {
        $menuactive = true;
    } else {
        $menuactive = false;
    }
    require_once('content/' . $page . '.php');
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $infos['seitentitel']; ?> - FuckUp Night Magdeburg</title>
    <meta name="description" content="<?= $infos['description']; ?>" />
    <meta name="keywords" content="<?= implode(',', $infos['keywords']); ?>" />
    <link rel="stylesheet" href="stylesheets/app.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>

    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/images/favicons/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="/images/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/images/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/images/favicons/manifest.json">
    <link rel="shortcut icon" href="/images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="msapplication-TileImage" content="/images/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
<header>
    <div class="row">
        <div class="small-12 column content">
                <div class="row">
                    <div class="small-12 medium-6 columns" id="logo">
                        <a href="index.html"><img src="images/dark.svg" class="text-center"/>
                            <span class="text-left">Magdeburg</span></a>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <span class="failure-big hide-for-small-only">Let's talk about failure</span>
                    </div>
                </div>
        </div>
    </div>
    <!-- nav -->
    <div class="row">
        <div class="small-12 column content">
            <nav class="top-bar" data-topbar role="navigation">
                <ul class="title-area">
                    <li class="name hide-for-medium-up">
                        <h1><a href="index.html">Home</a></h1>
                    </li>
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menü</span></a></li>
                </ul>

                <section class="top-bar-section">
                    <ul class="">
                        <li class="active hide-for-small-only"><a href="/index.html">Home</a></li>
                        <li class="divider"></li>
                        <li class=""><a href="./about.html">FuckUp Night?</a></li>
                        <li class="divider"></li>
                        <li class=""><a href="./procedure.html">Ablauf</a></li>
                        <li class="divider"></li>
                        <li class=""><a href="./contribute.html">Sprecher werden</a></li>
                        <li class="divider"></li>
                        <li class=""><a href="./gallery.html">Impressionen</a></li>
                    </ul>
                </section>
            </nav>
        </div>
    </div>
</header>
<section>
    <div class="row">
        <div class="small-12 column content">
            <?php echo $content; ?>
        </div>
    </div>
</section>
<footer>
    <div class="row" id="footer">
        <div class="small-12 column">
            <div class="row">
                <div class="small-12 medium-6 columns">
                    <div class="partner">
                        <div class="row">
                            <div class="small-12 medium-6 columns end">
                                <h6>Initiatoren</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="tile small-12 medium-5 columns">
                                <a href="http://muensmedia.de/" target="_blank">
                                    <img src="images/muensmedia.svg" alt="MÜNSMEDIA GbR" />
                                </a>
                            </div>
                            <div class="tile small-12 medium-5 medium-push-1 end columns">
                                <a href="https://igorlueckel.de/" target="_blank">
                                    <img src="images/igorlueckel.svg" alt="Igor Lückel" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="small-12 medium-3 columns">
                    <div class="partner">
                        <div class="row">
                            <div class="small-12 column">
                                <h6>Unterstützer</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="tile small-12 medium-9 column">
                                <a href="http://www.elbtalent.de/" target="_blank">
                                    <img src="images/elbtalent.png" alt="Elbtalent" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="small-12 medium-3 columns">
                    <div class="partner">
                        <div class="row">
                            <div class="small-12 column">
                                <h6>Rechtliches</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 column">
                                <p><a href="datenschutz.html">Haftungsausschluss</a><br />
                                    <a href="datenschutz.html">Datenschutz</a><br />
                                    <a href="impressum.html">Impressum</a><br />
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/foundation/js/foundation.min.js"></script>
<script src="bower_components/foundation/js/foundation/foundation.clearing.js"></script>
<script src="bower_components/jquery-backstretch/jquery.backstretch.min.js"></script>
<script src="js/app.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-56428441-1', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('send', 'pageview');

</script>
</body>
</html>
