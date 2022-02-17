<?php

namespace App\Model;

class NoteModel
{
public $connect;
public function __construct()
{
    $DB = new DBConnect();
    $this->connect = $DB->connect();
}

    public function getAll()
    {
        $sql ="SELECT * FROM note";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
}

    public function delete($id)
    {
     $sql="delete from note where id = $id";
     $this->connect->query($sql);
}

    public function create($data)
    {
        $sql="INSERT INTO note (title,content,type_id)
VALUES (?,?,?);";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data["title"]);
        $stmt->bindParam(2,$data["content"]);
        $stmt->bindParam(3,$data["type_id"]);
        $stmt->execute();
}

    public function update($id,$data)
    {
        $sql="UPDATE note
SET title = ?, content = ?, type_id = ?
WHERE id = ?";
         $stmt = $this->connect->prepare($sql);
         $stmt->bindParam(1,$data["title"]);
        $stmt->bindParam(2,$data["content"]);
        $stmt->bindParam(3,$data["type_id"]);
        $stmt->bindParam(4,$id);
        $stmt->execute();
}

    public function getbyid($id)
    {
     $sql="SELECT * FROM note where id = $id";
     $stmt = $this->connect->query($sql);
     return $stmt->fetch(\PDO::FETCH_OBJ);
}
}