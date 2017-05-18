<?php

Class Menu{
  var $title="";
  var $href="";
  function __construct($pTitle,$pHref){
    $this->title=$pTitle;
    $this->href=$pHref;
  }
  function edit(){
    if(isset($_GET['title'])){
      if(isset($_GET['href'])){
        $this->title=$_GET['title'];
        $this->href=$_GET['href'];
      }
    }
    else{
      echo'error ! il manque des parametres';
    }
  }
  function delete(){

  }
  function add(){

  }
}
$test = new Menu("boby","tail");
$test->edit();

?>
