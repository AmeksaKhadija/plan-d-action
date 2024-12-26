<?php

class Connection{
    private $servername = "localhost";
    private $password = "";
    private $username = "root";
    private $dbname = "miseEnSituation";

    public function Connect() {
        $conn = null;
        try {
            $conn = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected success" ;
        } catch (PDOException $e) {
            echo "error lor de la connection" . $e->getmessage();
        }
        return $conn;
    }
}
?>