<?php
$pages = array('index', 'impressum');
$page = str_replace(array('/', '.html'), '', strtolower($_SERVER['REDIRECT_URL']));
if (!in_array($page, $pages)) {
     if ($page != '')
        header("HTTP/1.1 404 Not Found");
        $page = 'index';
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
                                <li class="active hide-for-small-only expanded-item"><a href="index.html">Home</a></li>
                                <li class=""><a href="impressum.html">Impressum</a></li>
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
                <div class="date">04.12.2014 ab 18:00 Uhr</div>
                <div class="description">
                    <a href="https://www.facebook.com/events/742217125852954/" target="_blank">Magdeburg | Elbtalent</a>
                </div>
            </div>
        </div>

        <div class="partner">
            <h6>Initiatoren:</h6>

            <div class="tile">
                <a href="http://muensmedia.de/">
                    <img src="images/muensmedia.svg" alt="MÜNSMEDIA GbR" />
                </a>
            </div>

            <div class="tile">
                <a href="#">Igor Lückel</a>
            </div>
        </div>
        <div class="partner">
            <h6>Unterstützer:</h6>
        </div>
    </div>
    <div class="small-12 medium-12 large-2 columns">
        <!-- <h6>News:</h6> -->
    </div>
</div>

<div class="row collapse">
    <div class="small-12 medium-9 medium-push-3 large-8 large-push-2 columns end" id="footer">
        <ul class="inline-list">
            <li><a href="#">Datenschutz</a></li>
            <li><a href="impressum.html">Impressum</a></li>
        </ul>
    </div>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/foundation/js/foundation.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
