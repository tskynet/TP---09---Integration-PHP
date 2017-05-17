<?php
  $link=mysqli_connect("localhost","root","","inte2") or die ("error".mysql_error());
  if(isset($_GET['editHeader'])){
    echo'
    <form>
    <input type="hidden" name="editHeader" />
    <input type="text" name="title" placeholder="title" />
    <input type="text" name="text" placeholder="text" />
    <input type="text" name="href" placeholder="href" />
    <input type="text" name="source" placeholder="source img" />
    <input type="text" name="alt" placeholder="alt" />
    <input type="submit" />
    </form>
    ';

    if(isset($_GET['title'])){
      if(isset($_GET['text'])){
        if(isset($_GET['href'])){
          if(isset($_GET['source'])){
            if(isset($_GET['alt'])){
              $resultat_header='UPDATE `header` SET `title`="'.$_GET['title'].'",`text`="'.$_GET['text'].'",`href`="'.$_GET['href'].'",`source`="'.$_GET['source'].'",`alt`="'.$_GET['alt'].'"';
              mysqli_query($link,$resultat_header)or die("error sql ! ".mysql_error());
            }
          }
        }
      }
    }
  }
?>
