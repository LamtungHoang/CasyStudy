<?php

use App\controller\NoteController;

require "vendor/autoload.php";

$notecontroller = new NoteController();

$page = $_GET["page"]??'';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php?page=note-list">list</a>
<?php
switch ($page){
    case "note-list":
        $notecontroller->getAll();
        break;
    case "note-delete":
        $notecontroller->delete();
        break;
    case "note-create":
        $notecontroller->create();
        break;
    case "note-update":
        $notecontroller->update();
        break;
    default:
}
?>
</body>
</html>
