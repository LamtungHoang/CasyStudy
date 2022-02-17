<?php
namespace App\controller;
use App\Model\NoteModel;

class NoteController
{
public $connect;
public function __construct()
{
    $this->connect = new NoteModel();
}

    public function getAll()
    {
      $datas = $this->connect->getAll();
        include"App/View/list.php";
}

    public function delete()
    {
        $this->connect->delete($_REQUEST['id']);
        header("location:index.php?page=note-list");
}

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            include "App/View/create.php";
        }else{
            $this->connect->create($_POST);
            header("location:index.php?page=note-list");
        }
}

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET"){
            $datas = $this->connect->getbyid($_GET["id"]);
            include "App/View/update.php";
        }else {
            $this->connect->update($_REQUEST["id"],$_POST);
            header("location:index.php?page=note-list");
        }
}
}