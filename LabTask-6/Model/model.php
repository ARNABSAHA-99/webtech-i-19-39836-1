<?php 

require_once 'db_connect.php';

function addProduct($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `user_info`(`UserName`, `Password`, `Category`)  VALUES (:username, :password, :category)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':username' => $data['username'],
            ':password' => $data['password'],
            ':category' => $data['category'],
           
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function showAllusers(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `user_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function updateUser($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `user_info` set `UserName` = ?, `Password` = ?, `Category` = ? where `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['username'], $data['password'], $data['category'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteUser($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `user_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function showUser($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `user_info` where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchUser($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE Name LIKE '%$name%'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
?>