<?php
function getConnection()
{
    $pdo_conn = new PDO("mysql:host=127.0.0.1;dbname=CRUD", 'root', 'zasqwe123');

    return $pdo_conn;
}

function insert($name, $description, $created_at)
{
    $pdo_conn = getConnection();
    $sql = "INSERT INTO article (name, description, created_at) VALUES (:name, :description, :created_at)";
    $statement = $pdo_conn->prepare($sql);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':created_at', $created_at);
    return $statement->execute();
}

function findAll()
{
    $pdo_conn = getConnection();
    $sql = 'SELECT * FROM article';
    $statement = $pdo_conn->prepare($sql);
    $statement->execute();
    return $statement->fetchAll();
}

function update($id,$name,$description,$created_at){

    $pdo_conn = getConnection();
    $sql = "UPDATE article SET name=:name, description=:description, created_at=:created_at WHERE id= :id";
    $statement = $pdo_conn->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':created_at', $created_at);
    return $statement->execute();
}

function deleteById($id){

    $pdo_conn = getConnection();
    $sql = "DELETE FROM article WHERE id= :id";
    $statement = $pdo_conn->prepare($sql);
    $statement->bindValue(':id', $id);
}

function findByid($id){
    $pdo_conn = getConnection();
    $sql = 'SELECT * FROM article WHERE id = :id';
    $pdo_statement = $pdo_conn->prepare($sql);
    $pdo_statement->bindValue(":id", $id);
    $pdo_statement->execute();

    return $pdo_statement->fetch();
}