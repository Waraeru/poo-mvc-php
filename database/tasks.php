<?php

  require_once $app."/database/model.php";

  class TaskModel extends Model {

    public function getAll () {

      $db = parent::connect();
      $sql = 'select * from tasks';
      $query = $db->prepare($sql);
      $query->execute();
      $tasks = $query->fetchAll();
      return $tasks;

        
    }
      
    public function CreateOne(){
        
    $name = $_POST['input'];
    $db = parent::connect();
    $req = 'INSERT INTO tasks(name) VALUES(:name)';
    $query = $db->prepare($req);
    $query = $query->execute(array( ":name"=> $name));
        header ('location:' .$racine);
    }

  

public function DeleteOne(){
   
    $name2 = $_POST['input2'];
    $db = parent::connect();
    $req = 'DELETE FROM tasks';
    $query = $db->prepare($req);
    $query = $query->execute();
        header ('location:' .$racine);
    }
    
  }


?>

