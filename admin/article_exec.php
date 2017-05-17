<?php
  $link=mysqli_connect("localhost","root","","inte2") or die ("mysql error".mysql_error());
  if(isset($_GET['editArticle'])){
    echo'
    <form>
    <input type="hidden" name="editArticle" value="'.$_GET['editArticle'].'" />
    <input type="text" name="title" placeholder="title" />
    <input type="text" name="source" placeholder="source" />
    <input type="text" name="alt" placeholder="alt" />
    <input type="text" name="text" placeholder="text" />
    <input type="text" name="href" placeholder="href" />
    <input type="submit" />
    </form>
    ';
    if(isset($_GET['title'])){
      if(isset($_GET['source'])){
        if(isset($_GET['alt'])){
          if(isset($_GET['text'])){
            if(isset($_GET['href'])){
              $resultat_edit='UPDATE `article` SET `title`="'.$_GET['title'].'",`source`="'.$_GET['source'].'",`alt`="'.$_GET['alt'].'",`text`="'.$_GET['text'].'",`href`="'.$_GET['href'].'" WHERE `id`="'.$_GET['editArticle'].'"';
              mysqli_query($link,$resultat_edit)or die("error".mysql_error());
            }
          }
        }
      }
    }
  }
  if(isset($_GET['deleteArticle'])){
    $resultat_delete='DELETE FROM `article` WHERE `id`="'.$_GET['deleteArticle'].'"';
    mysqli_query($link,$resultat_delete) or die("error".mysql_error());
  }


  if(isset($_GET['addArticle'])){
    echo'
    <form>
    <input type="hidden" name="addArticle" />
    <input type="text" name="title" placeholder="title" />
    <input type="text" name="source" placeholder="source" />
    <input type="text" name="alt" placeholder="alt" />
    <input type="text" name="text" placeholder="text" />
    <input type="text" name="href" placeholder="href" />
    <input type="submit" />
    </form>
    ';
    if(isset($_GET['title'])){
      if(isset($_GET['source'])){
        if(isset($_GET['alt'])){
          if(isset($_GET['text'])){
            if(isset($_GET['href'])){
              $resultat_add='INSERT INTO `article` SET `title`="'.$_GET['title'].'",`source`="'.$_GET['source'].'",`alt`="'.$_GET['alt'].'",`text`="'.$_GET['text'].'",`href`="'.$_GET['href'].'"';
              mysqli_query($link,$resultat_add) or die("errorsql".mysql_error());
            }
          }
        }
      }
    }

  }

  ?>
