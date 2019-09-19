
<!DOCTYPE html>
<html lang="en">
<?php
include "header.php";
include "config.php";
?>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   <div class="container">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="index.php">Project name</a>
      </div>
      <div class="collapse navbar-collapse">
         <ul class="nav navbar-nav">
            <li><a href="index.php">Reader</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
         </ul>
      </div><!--/.nav-collapse -->
   </div>
</div>
<?php
include "Controller/Controller.php";
?>
<?php include"footer.php" ?>
</body>
</html>