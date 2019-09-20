<?php
include "C_Reader.php";
$c_reader = new C_Reader();
if (isset($_GET['mode'])) {
   if ($_GET['mode']=='reader'){
      switch ($_GET['action']) {
         case 'delete':
            $c_reader->deleteReader($_GET['id']);
            header("Location:index.php");
            break;
         case 'detail':
            $reader = $c_reader->getReader($_GET['id']);
            include 'view/reader/detail.php';
            break;
         case 'update':
            $c_reader->updateData((object)$_POST, $_FILES['image']);
            header("Location:index.php");
            break;
         case 'add':
            //var_dump($_POST);die();
            $c_reader->addReader((object)$_POST, $_FILES['image']);
            header("Location:index.php");
            break;
         default:
            header("Location:index.php");
            break;
      }
   }elseif ($_GET['mode']=='category'){
      switch ($_GET['action']){
         case 'add':
            var_dump($_GET);
            break;
         default:
            break;
      }
   }

} else {
   $result = $c_reader->showAll();
   include "view/reader/show.php";
}