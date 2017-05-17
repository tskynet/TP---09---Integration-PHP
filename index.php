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
                  <?php
                    $resultat_menu=mysqli_query($link,'SELECT * FROM `menu`');
                    while($data_menu=mysqli_fetch_assoc($resultat_menu)){
                      echo'
                      <li><a href="'.$data_menu['href'].'">'.$data_menu['title'].'</a></li>
                      ';
                    }
                  ?>
                </ul>
              </div>
            </div>
            <ul class="small-hide large-show">
              <?php
              $i=1;
                $resultat_menu2=mysqli_query($link,'SELECT * FROM `menu`');
                while($data_menu2=mysqli_fetch_assoc($resultat_menu2)){
                  echo'
                    <li class="li-menu'.$i.'"><a class="link-menu'.$i.'" href="'.$data_menu2['href'].'">'.$data_menu2['title'].'</a></li>
                  ';
                  $i++;
                }
              ?>
            </ul>
          </div>
        </div>
      </header>
      <div class="row slider">
        <div class="column medium-5 large-5">
          <?php
          $resultat_title=mysqli_query($link,'SELECT * FROM `header`');
          $data_title=mysqli_fetch_assoc($resultat_title);
          echo'
          <h1>'.$data_title['title'].'</h1>
          <p>'.$data_title['text'].'</p>
          <a href="'.$data_title['href'].'" class="link-red">read more »</a>
          ';
          ?>
        </div>
        <div class="column medium-7 large-7">
          <?php
          echo'<img src="'.$data_title['source'].'" alt="'.$data_title['alt'].'" />';
          ?>
        </div>
      </div>
      <div class="row categorie">
        <?php
          $resultat_categorie=mysqli_query($link,'SELECT * FROM `article`');
          while($data_categorie=mysqli_fetch_assoc($resultat_categorie)){
            echo'
            <div class="column medium-6 large-3">
              <div class="article">
                <h3>'.$data_categorie['title'].'</h3>
                <img src="'.$data_categorie['source'].'" alt="'.$data_categorie['alt'].'" />
                <span>'.$data_categorie['text'].'</span>
                <a href="'.$data_categorie['href'].'" class="link-red">read more »</a>
              </div>
            </div>
            ';
          }
        ?>
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
            <?php
            $resultat_about=mysqli_query($link,'SELECT * FROM `aboutus` where `id`="1"');
            $data_about=mysqli_fetch_assoc($resultat_about);
            echo'
              <div class="article">
              <h4>'.$data_about['title'].'</h4>
              <img src="'.$data_about['source'].'" alt="'.$data_about['alt'].'" />
              <p>'.$data_about['text'].'</p>
              <a href="'.$data_about['href'].'" class="float-right">read more »</a>
              </div>';
            ?>
          </div>
          <div class="column medium-6 large-3">
            <div class="article">
              <h4>quick links</h4>
              <ul>
                <?php
                  $resultat_link=mysqli_query($link,'SELECT * FROM `quicklink`');
                  while($data_link=mysqli_fetch_assoc($resultat_link)){
                    echo'
                    <li><a href="'.$data_link['href'].'">'.$data_link['text'].'</a></li>
                    ';
                  }
                ?>
              </ul>
            </div>
          </div>
          <div class="column medium-6 large-3">
            <div class="article">
              <h4>lasted blog posts</h4>
              <?php
              $resultat_blog=mysqli_query($link,'SELECT * FROM `lastblog`');
              while($data_blog=mysqli_fetch_assoc($resultat_blog)){
                echo'
                <div class="post">
                  <h5>'.$data_blog['title'].'</h5>
                  <span class="date">'.$data_blog['date'].'</span>
                  <p>'.$data_blog['text'].'</p>
                  <a href="'.$data_blog['href'].'" class="float-right">Read More »</a>
                </div>
                ';
              }
              ?>
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
