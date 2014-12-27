<?php
// Meta-Informationen
$infos['seitentitel'] = 'Galerie';
$infos['description'] = 'Description';
$infos['keywords'] = array('Keyword1', 'keyword2');

$content = '
<div class="content-area">
    <div id="slides">
      <div class="slides-container">
        <img src="images/md-2014/_97A8740.jpg" alt="">
        <img src="images/md-2014/_97A8754.jpg" alt="">
        <img src="images/md-2014/_97A8763.jpg" alt="">
        <img src="images/md-2014/_97A8771.jpg" alt="">
        <img src="images/md-2014/_97A8782.jpg" alt="">
        <img src="images/md-2014/_97A8787.jpg" alt="">
        <img src="images/md-2014/_97A8795.jpg" alt="">
        <img src="images/md-2014/_97A8803.jpg" alt="">
        <img src="images/md-2014/_97A8841.jpg" alt="">
        <img src="images/md-2014/_97A8855.jpg" alt="">
        <img src="images/md-2014/_97A8910.jpg" alt="">
        <img src="images/md-2014/_97A8914.jpg" alt="">
        <img src="images/md-2014/_97A8954.jpg" alt="">
        <img src="images/md-2014/_97A8976.jpg" alt="">
        <img src="images/md-2014/_97A9034.jpg" alt="">
        <img src="images/md-2014/_97A9055.jpg" alt="">
      </div>
      <nav class="slides-navigation" style="top: 2%;">
          <a href="#" class="fullscreen" id="fullscreen">
            <i class="fa fa-arrows-alt"></i>
          </a>
      </nav>
      <nav class="slides-navigation">
          <a href="#" class="next">
            <i class="fa fa-chevron-right"></i>
          </a>
          <a href="#" class="prev">
            <i class="fa fa-chevron-left"></i>
          </a>
      </nav>
    </div>
</div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/benbarnett/jQuery-Animate-Enhanced/jquery.animate-enhanced.min.js"></script>
<script src="bower_components/superslides/dist/jquery.superslides.min.js"></script>
<script src="bower_components/screenfull/dist/screenfull.js"></script>
<link rel="stylesheet" href="bower_components/superslides/dist/stylesheets/superslides.css" />
<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css" />
<script>
    $("#slides").superslides();
    $("#fullscreen").click(function () {
        if (screenfull.enabled) {
            screenfull.toggle($("#slides")[0]);
        }
    });
    autoslide();
</script>
';
?>