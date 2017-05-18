<?php
   $bdd= new PDO('mysql:host=localhost;dbname=inte2;charset=utf8', 'root', '');
  Class SectionAdmin{

    var $title="";
    var $text="";
    var $source="";
    var $alt="";
    var $href="";
    var $date="";
    function __construct($pTitle,$pText,$pSource,$pAlt,$pHref,$pDate){
      $this->setTitle($pTitle);
      $this->setText($pText);
      $this->setSource($pSource);
      $this->setAlt($pAlt);
      $this->setHref($pHref);
      $this->setDate($pDate);
  //    echo 'création objet administrable    ';
    }
    function setTitle($pTitle){
      $this->title=$pTitle;
    }
    function setText($pText){
      $this->text=$pText;
    }
    function setSource($pSource){
      $this->source=$pSource;
    }
    function setAlt($pAlt){
      $this->alt=$pAlt;
    }
    function setHref($pHref){
      $this->href=$pHref;
    }
    function setDate($pDate){
      $this->date=$pDate;
    }
    //getter
    function getTitle(){
      echo 'mon titre est :'.$this->title.'<br/>';
    }
    function getText(){
      echo'mon texte est :'.$this->text.'<br/>';
    }
    function getSource(){
      echo'ma source est :'.$this->source.'<br/>';
    }
    function getAlt(){
      echo'mon alt est :'.$this->alt.'<br/>';
    }
    function getHref(){
      echo'mon href est :'.$this->href.'<br/>';
    }
    function getDate(){
      echo'ma date est :'.$this->date.'<br/>';
    }
    function showMenu(){
      $bdd= new PDO('mysql:host=localhost;dbname=inte2;charset=utf8', 'root', '');
      $menu = $bdd->query('SELECT * FROM `menu`');
      while($data_menu = $menu->fetch()){
        echo'<li><a href="'.$data_menu['href'].'">'.$data_menu['title'].'</a></li>';
      }
    }
    function showMenuHidden(){
      $bdd= new PDO('mysql:host=localhost;dbname=inte2;charset=utf8', 'root', '');
      $i=1;
      $menu_hidden = $bdd->query('SELECT * FROM `menu`');
      while($data_hidden = $menu_hidden->fetch()){
        echo'
          <li class="li-menu'.$i.'"><a class="link-menu'.$i.'" href="'.$data_hidden['href'].'">'.$data_hidden['title'].'</a></li>
        ';
      }
    }
    function showHeader(){
      $bdd= new PDO('mysql:host=localhost;dbname=inte2;charset=utf8', 'root', '');
      $header= $bdd->query('SELECT * FROM `header`');
      $data_header = $header->fetch();
      echo'
      <div class="column medium-5 large-5">
      <h1>'.$data_header['title'].'</h1>
      <p>'.$data_header['text'].'</p>
      <a href="'.$data_header['href'].'" class="link-red">read more »</a>
      </div>
      <div class="column medium-7 large-7">
      <img src="'.$data_header['source'].'" alt="'.$data_header['alt'].'" />
      </div>
        ';
    }
    function showArticle(){
      $bdd= new PDO('mysql:host=localhost;dbname=inte2;charset=utf8', 'root', '');
      $article = $bdd->query('SELECT * FROM `article`');
      while($data_article= $article->fetch()){
        echo'
        <div class="column medium-6 large-3">
          <div class="article">
            <h3>'.$data_article['title'].'</h3>
            <img src="'.$data_article['source'].'" alt="'.$data_article['alt'].'" />
            <span>'.$data_article['text'].'</span>
            <a href="'.$data_article['href'].'" class="link-red">read more »</a>
          </div>
        </div>
        ';
      }
    }

    function aboutUs(){
      $bdd= new PDO('mysql:host=localhost;dbname=inte2;charset=utf8', 'root', '');
      $about_us = $bdd->query('SELECT * FROM `aboutus`');
      $data_about=$about_us->fetch();
      echo'
      <div class="article">
      <h4>'.$data_about['title'].'</h4>
      <img src="'.$data_about['source'].'" alt="'.$data_about['alt'].'" />
      <p>'.$data_about['text'].'</p>
      <a href="'.$data_about['href'].'" class="float-right">read more »</a>
      </div>
        ';

    }
    function quickLink(){
      $bdd= new PDO('mysql:host=localhost;dbname=inte2;charset=utf8', 'root', '');
      $quicklink= $bdd->query('SELECT * FROM `quicklink`');
      while($data_link=$quicklink->fetch()){
        echo'
          <li><a href="'.$data_link['href'].'">'.$data_link['text'].'</a></li>
        ';
      }
    }

    function showBlog(){
      $bdd= new PDO('mysql:host=localhost;dbname=inte2;charset=utf8', 'root', '');
      $blog= $bdd->query('SELECT * FROM `lastblog`');
      while($data_blog=$blog->fetch()){
        echo'
        <div class="post">
          <h5>'.$data_blog['date'].'</h5>
          <span class="date">'.$data_blog['date'].'</span>
          <p>'.$data_blog['text'].'</p>
          <a href="'.$data_blog['href'].'" class="float-right">Read More »</a>
        </div>
        ';
      }

    }
    /*
    echo'
    <div class="post">
      <h5>'.$data_blog['title'].'</h5>
      <span class="date">'.$data_blog['date'].'</span>
      <p>'.$data_blog['text'].'</p>
      <a href="'.$data_blog['href'].'" class="float-right">Read More »</a>
    </div>
    ';
    */
  }


  // $test = new SectionAdmin("test","je suis un texte","img/poney/battle.jpg","testing alt","#","");
  // $test->setTitle('Mon nouveau titre');
  // $test->getTitle();
  // $test->getHref();
  // $test->getText();
  // $test->showMenu();
  // $test->showMenuHidden();
  // $test->showHeader();
  // $test->aboutUs();
  // $test->quickLink();
/*
class qui va gérer toutes les parties à afficher en front
pour ça il faut qu'on définisse ce dont on a besoin
donc  :
title,text,href,source,alt,date
soit 6 types de données

je dois donc initier un objet avec les données en parametres afin de le définir
ensuite je dois faire des fonctions qui permettent d'afficher le tout :
monObjet->afficher
Seulement le best c'est d'afficher que ce que l'ont souhaite, type title :
monObjet->afficherTitle
Donc 6functions pour l'affichage,

Il en faudra donc 6 pour l'édition

Et une pour la suppression

Et une pour créer un nouvel objet !

Ensuite il va faloir comprendre comment en créant un objet on peut rajouter les infos en db

*/
?>
