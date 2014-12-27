<?php
$pages = array('index', 'impressum', 'datenschutz', 'organize', 'contribute', 'about', 'procedure', 'gallery');
$page = str_replace(array('/', '.html'), '', strtolower($_SERVER['REDIRECT_URL']));
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
</head>
<body>
<div class="row">
    <div class="small-12 small-push-0 medium-9 medium-push-3 large-8 large-push-2 column content">
        <div class="content-area">
            <div class="row">
                <div class="small-12 medium-6 columns" id="logo">
                    <a href="index.html"><img src="images/dark.svg" class="text-center"/>
                        <span class="text-left">md.fuckupnight.de</span></a>
                </div>
                <div class="small-12 medium-6 columns">
                    <nav class="top-bar" data-topbar role="navigation">
                        <ul class="title-area">
                            <li class="name hide-for-medium-up">
                                <h1><a href="index.html">Home</a></h1>
                            </li>
                            <li class="toggle-topbar menu-icon"><a href="#"><span>Menü</span></a></li>
                        </ul>

                        <section class="top-bar-section">
                            <ul class="right">
                                <li class="active hide-for-small-only expanded-item"><a href="/index.html">Home</a></li>
                                <li class="expanded-item"><a href="./about.html">FuckUp Night?</a></li>
                                <li class=""><a href="./procedure.html">Ablauf</a></li>
                            </ul>
                        </section>
                    </nav>
                    <span class="failure-big hide-for-small-only">Let's talk about failure!</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="small-12 medium-9 medium-push-3 large-8 large-push-2 columns content">
        <?php echo $content; ?>
    </div>
    <div class="small-12 medium-3 medium-pull-9 large-2 large-pull-8 columns">
        <div class="termine">
            <h6>Nächste FuckUp Night:</h6>
            <div class="termin-item">
                <div class="date">Frühjahr 2015</div>
                <div class="description">
                    <a href="#">Magdeburg | Elbtalent</a>
                </div>
            </div>
        </div>

        <div class="partner">
            <h6>Initiatoren:</h6>

            <div class="tile">
                <a href="http://muensmedia.de/" target="_blank">
                    <img src="images/muensmedia.svg" alt="MÜNSMEDIA GbR" />
                </a>
            </div>

            <div class="tile">
                <a href="https://igorlueckel.de/" target="_blank">Igor Lückel</a>
            </div>
        </div>
        <div class="partner">
            <h6>Unterstützer:</h6>

            <div class="tile">
                <a href="http://www.elbtalent.de/" target="_blank">
                    <img src="images/elbtalent.png" alt="Elbtalent" />
                </a>
            </div>
        </div>
    </div>
    <div class="small-12 medium-12 large-2 columns">
        <h6>News:</h6>
        <!--<p><a href="./organize.html">Eine FuckUp Night in deiner Stadt organisieren</a></p>-->
        <p><a href="./contribute.html">Auf einer FuckUp Night sprechen</a></p>
    </div>
</div>

<div class="row collapse">
    <div class="small-12 medium-9 medium-push-3 large-8 large-push-2 columns end" id="footer">
        <ul class="inline-list">
            <li><a href="datenschutz.html">Haftungsausschluss &amp; Datenschutz</a></li>
            <li><a href="impressum.html">Impressum</a></li>
        </ul>
    </div>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/foundation/js/foundation.min.js"></script>
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
