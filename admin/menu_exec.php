<?php
  $link=mysqli_connect("localhost","root","","inte2") or die ("mysql error".mysql_error());
  if(isset($_GET['editMenu'])){
    echo'
    <form>
    <input type="hidden" name="editMenu" value="'.$_GET['editMenu'].'" />
    <input type="text" name="title" placeholder="title" />
    <input type="text" name="href" placeholder="href" />
    <input type="submit" />
    </form>
    ';
    if(isset($_GET['title'])){
      if(isset($_GET['href'])){
        $resultat_edit='UPDATE `menu` SET `title`="'.$_GET['title'].'",`href`="'.$_GET['href'].'" WHERE `id`="'.$_GET['editMenu'].'"';
        mysqli_query($link,$resultat_edit)or die("eeror".mysql_error());
      }
    }
  }
  if(isset($_GET['deleteMenu'])){
    $resultat_delete='DELETE FROM `menu` WHERE `id`="'.$_GET['deleteMenu'].'"';
    mysqli_query($link,$resultat_delete) or die("error".mysql_error());
  }
  if(isset($_GET['addMenu'])){
    echo'
    <form>
    <input type="hidden" name="addMenu" />
    <input type="text" name="title" placeholder="title" />
    <input type="text" name="href" placeholder="href" />
    <input type="submit" />
    </form>
    ';
    if(isset($_GET['title'])){
      if(isset($_GET['href'])){
        $resultat_add='INSERT INTO `menu` SET `title`="'.$_GET['title'].'",`href`="'.$_GET['href'].'"';
        mysqli_query($link,$resultat_add) or die("errorsql".mysql_error());
      }
    }

  }

?>
