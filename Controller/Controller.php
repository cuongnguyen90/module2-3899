<?php
include "C_Reader.php";
$controller = new C_Reader();
if (isset($_GET['action'])){

    switch ($_GET['action']){
        case 'delete':
            $controller->deleteReader($_GET['id']);
            header("Location:index.php");
            break;
        case 'detail':
            $reader = $controller->getReader($_GET['id']);
            include 'view/reader/detail.php';
            break;
        case 'update':
            $controller->updateData((object)$_POST);
            header("Location:index.php");
            break;
        case 'add':
            $controller->addReader((object)$_POST);
            header("Location:index.php");
            break;
        default:
            header("Location:index.php");
            break;
    }
}else{
    $result = $controller->showAll();
    include "view/reader/show.php";
}