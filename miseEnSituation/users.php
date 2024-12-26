<?php
include 'connection.php';

$db = new Connection();
$db->connect();

public function addUsers($firstname,$lastname,$email,$password){
    $conn = null;
    try {
        $query = "INSERT INTO users(firstname,lastname,email,password) VALUES ($firstname,$lastname,$email,$password);";
    
        $conn = $this->db->prepare($query);
        $conn->execute($query);
    } catch (PDOEXEPTION $e) {
        echo "erreur lor de l'ajout d'un utilisateur".$e->getmessage();
    }
}



public function getAllUsers(){
    $conn = null;
    try {
        $query = "SELECT * FROM users;";
        $conn = prepare($query);
        $conn->execute($query);
    } catch (PDOEXEPTION $e) {
        echo "erreur lor de l'affichage des utilisateurs".$e->getmessage();
    }
}

PUBLIC function deleteUser($id){
    if(isset($_GET['id']) && !empty($_GET['id'])){

        $query = "DELETE FROM users WHERE id = $id;";
        $conn->prepare($query);
        $conn->execute($query);
    }else{
        echo "erreur";
    }
}

public function updateUser($firstname,$lastname,$email,$password){
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $query = "UPDATE FROM users SET "firstname" = $firstname;";
        $conn->prepare($query);
        $conn->execute($query);
    }else{
        echo "erreur";
    }
}


?>