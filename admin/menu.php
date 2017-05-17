
<link type="text/css" rel="stylesheet" href="../css/style_admin.css" />

<form>
  <ul>
    <?php
      $link=mysqli_connect("localhost","root","","inte2") or die ("error sql".mysql_error());
      $resultat=mysqli_query($link,'SELECT * FROM `menu`');
      while($data=mysqli_fetch_assoc($resultat)){
        echo'
        <li>TITLE : '.$data['title'].' -> HREF : '.$data['href'].' ->
        <button class="buttonEdit" value="'.$data['id'].'" name="editMenu">EDIT</button>
        <button class="buttonDelete" value="'.$data['id'].'" name="deleteMenu">DELETE</button>
        </li>
        ';
      }
    ?>
    <li><button name="addMenu" value="1">ADD</button></li>
  </ul>
</form>
