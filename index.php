<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.css" />
    <link type="text/css" rel="stylesheet" href="font-awesome.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <?php
      $link=mysqli_connect("localhost","root","","inte2") or die("mysql error".mysql_error());
      include_once('class_admin.php');
      $bdd = new SectionAdmin('','','','','','');
    ?>
    <div id="all-page">
      <header>
        <div class="row">
          <div class="column data-large-37">
            <span>Design</span>
          </div>
          <div class="column data-large-63">
            <div class="large-hide burger-align">
              <i class="fa fa-bars" aria-hidden="true"></i>
              <div class="hidden-menu">
                <ul>
                  <?php  $bdd->showMenuHidden();  ?>
                </ul>
              </div>
            </div>
            <ul class="small-hide large-show">
              <?php  $bdd->showMenu();  ?>
            </ul>
          </div>
        </div>
      </header>
      <div class="row slider">
        <?php $bdd->showHeader(); ?>
      </div>
      <div class="row categorie">
        <?php $bdd->showArticle(); ?>
      </div>
      <div class="row categorie2">
        <div class="column medium-6 large-3">
          <div class="article2">
            <h3>your <i>title here</i></h3>
            <img src="img/head-article.jpg" alt="test" />
          </div>
        </div>
        <div class="column medium-6 large-3">
          <div class="article2">
            <h3 class="opacity">your <i>title here</i></h3>
            <img src="img/head-article.jpg" alt="test" />
          </div>
        </div>
        <div class="column medium-6 large-3">
          <div class="article2">
            <h3>your <i>title here</i></h3>
            <img src="http://placehold.it/225x225" alt="test" />
          </div>
        </div>
        <div class="column medium-6 large-3">
          <div class="article2">
            <h3 class="opacity">your <i>title here</i></h3>
            <span>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.
            </span>
            <a href="#" class="link-red">read more »</a>
          </div>
        </div>
      </div>
      <footer>
        <div class="row border">
          <div class="column medium-6 large-3">
            <?php $bdd->aboutUs();?>
          </div>
          <div class="column medium-6 large-3">
            <div class="article">
              <h4>quick links</h4>
              <ul>
                <?php $bdd->quickLink();  ?>
              </ul>
            </div>
          </div>
          <div class="column medium-6 large-3">
            <div class="article">
              <h4>lasted blog posts</h4>
              <?php $bdd->showBlog(); ?>
            </div>
          </div>
          <div class="column medium-6 large-3">
            <div class="article">
              <h4>contact us</h4>
              <form>
                <input type="text" name="name" placeholder="Name" />
                <input type="text" name="mail" placeholder="Email" />
                <input type="text" name="subject" placeholder="Subject" />
                <input type="text" class="input-message" name="message" placeholder="Message" />
                <a href="#" class="link-red">submit</a>
              </form>
            </div>
          </div>
        </div>
        <span class="text-left">Copyright © 2013 Domain Name - All Rights Reserved</span>
        <span class="text-right">Template by OS Templates</span>
      </footer>
    </div><!--FIN DU DIV ALL PAGE -->
    <script type="text/javascript" src="js/jQuery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script type="text/javascript" src="js/js.js"></script>
  </body>
</html>
