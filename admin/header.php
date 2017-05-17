<link type="text/css" rel="stylesheet" href="../css/style_admin.css" />
<form>
  <ul>
    <?php
      $link=mysqli_connect("localhost","root","","inte2") or die ("error sql".mysql_error());
      $resultat=mysqli_query($link,'SELECT * FROM `header`');
      while($data=mysqli_fetch_assoc($resultat)){
        echo'
        <li>TITLE : '.$data['title'].' <br/>
            TEXT : '.$data['text'].' <br/>
            href : '.$data['href'].' <br/>
            source img : '.$data['source'].' <br/>
            alt : '.$data['alt'].' <br/>
        <button class="buttonEdit" value="'.$data['id'].'" name="editHeader">EDIT</button>

        </li>
        ';
      }
    ?>
  </ul>
</form>
