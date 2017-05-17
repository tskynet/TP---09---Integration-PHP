<link type="text/css" rel="stylesheet" href="../css/style_admin.css" />

<form>
  <ul>
    <?php
      $link=mysqli_connect("localhost","root","","inte2") or die ("error sql".mysql_error());
      $resultat=mysqli_query($link,'SELECT * FROM `article`');
      while($data=mysqli_fetch_assoc($resultat)){
        echo'
        <li> Title : '.$data['title'].' ,<br/> source image : '.$data['source'].' ,<br/> alt : '.$data['alt'].'  ,<br/> text :'.$data['text'].'  ,<br/> href : '.$data['href'].'
        <button class="buttonEdit" value="'.$data['id'].'" name="editArticle">EDIT</button>
        <button class="buttonDelete" value="'.$data['id'].'" name="deleteArticle">DELETE</button>
        </li>
        ';
      }
    ?>
    <li><button name="addArticle" value="1">ADD</button></li>
  </ul>
</form>
