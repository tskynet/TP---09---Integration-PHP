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
    <link type="text/css" rel="stylesheet" href="css/style_admin.css" />
  </head>
  <body>
    <h1>ADMINISTRATION</h1>
       <div class="row">
         <div class="column large-2 colLeft">
         <form method="GET">
             <ul>
               <li><button name="menu" value="yes">Menu</buton></li>
               <li><button name="header" value="yes">Header</buton></li>
               <li><button name="article" value="yes">article</button></li>
               <li><button name="featuredItem" value="yes">featured item</button></li>
               <li><button name="listproduct" value="yes">list product </button></li>
               <li><button name="menubottom" value="yes">menu bottom</button></li>
               <li><button name="popular" value="yes">popular categorie</button></li>
             </ul>
         </form>
         </div>
         <div class="column large-6 colRight">
           <?php
            if(isset($_GET['menu'])){
              include("admin/menu.php");
            }
            if(isset($_GET['editMenu'])){
              include("admin/menu_exec.php");
            }
            if(isset($_GET['deleteMenu'])){
              include("admin/menu_exec.php");
            }
            if(isset($_GET['addMenu'])){
              include("admin/menu_exec.php");
            }
            if(isset($_GET['header'])){
              include("admin/header.php");
            }
            if(isset($_GET['editHeader'])){
              include("admin/header_exec.php");
            }
            if(isset($_GET['article'])){
              include("admin/article.php");
            }
            if(isset($_GET['editArticle'])){
              include("admin/article_exec.php");
            }
            if(isset($_GET['deleteArticle'])){
              include("admin/article_exec.php");
            }
            if(isset($_GET['addArticle'])){
              include("admin/article_exec.php");
            }
           ?>
         </div>
     </div>

  </body>
</html>
