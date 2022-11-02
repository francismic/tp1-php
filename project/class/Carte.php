<?php

class Carte extends PDO {

    public function __construct(){
        parent::__construct('mysql:host=localhost; dbname=e2195223; port=3306; charset=utf8', 'e2195223', 'WqScf1yZRuG2V8IZTHCA');
    }

    public function select($table, $field='carteSportId', $order='ASC'){
        $sql = "SELECT * FROM $table INNER JOIN categorie ON $table.categorieSportId = categorie.categorieId INNER JOIN collection  ON $table.nomCollectionId = collection.collectionId ORDER BY $field $order";
        $stmt  = $this->query($sql);
        return  $stmt->fetchAll();
    }

    public function selectId($table, $value, $field = 'carteSportId', $url = 'index.php'){
        $sql ="SELECT * FROM $table INNER JOIN categorie ON $table.categorieSportId = categorie.categorieId INNER JOIN collection  ON $table.nomCollectionId = collection.collectionId WHERE $field = :$field";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$field", $value);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count == 1 ){
            return $stmt->fetch();
        }else{
            header("location: $url");
        }
    }

    public function insert($table, $data, $url = 'index.php'){
        $nomChamp = implode(", ",array_keys($data));
        $valeurChamp = ":".implode(", :", array_keys($data));

        $sql = "INSERT INTO $table ($nomChamp) VALUES ($valeurChamp)";
        
        $stmt = $this->prepare($sql);
        foreach($data as $key=>$value){
            $stmt->bindValue(":$key", $value);
        } 
        if(!$stmt->execute()){
            print_r($stmt->errorInfo());
        }else{
            header("location: $url");
        }
    }

    public function update($table, $data, $champId = 'carteSportId', $url = 'index.php'){
        $champRequete = null;
        foreach($data as $key=>$value){
            $champRequete .= "$key = :$key, ";
        }
        $champRequete = rtrim($champRequete, ", ");

        $sql = "UPDATE $table SET $champRequete WHERE $champId = :$champId";

        $stmt = $this->prepare($sql);
        foreach($data as $key=>$value){
            $stmt->bindValue(":$key", $value);
        } 
        if(!$stmt->execute()){
            print_r($stmt->errorInfo());
        }else{
            header("location: $url");
        }
    }

    public function delete($table, $id, $champId = 'carteSportId', $url='index.php'){

        $sql = "DELETE FROM $table WHERE $champId = :$champId";

        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$champId", $id);
        if(!$stmt->execute()){
            print_r($stmt->errorInfo());
        }else{
            header('Location: ' . $url);
        }

    }

}


?>