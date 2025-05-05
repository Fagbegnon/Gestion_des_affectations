<?php
namespace App\Models;
use App\Core\Database;  
use PDO;
use PDOException;   
class Encadreur {
    protected $dd;
    public function __construct(){
        $this->dd = new Database();
    }
    
    public function getAllEncadreur() {
        $stmt = $this->dd->connect()->prepare("SELECT * FROM encadreur");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEncadreurById($id) {
        $stmt = $this->dd->connect()->prepare("SELECT * FROM encadreur WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function addEncadreur($nom, $prenom, $email) {
        $stmt = $this->dd->connect()->prepare("INSERT INTO encadreur (nom, prenom, email) VALUES (:nom, :prenom, :email)");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        return $stmt->execute();
        
    }
    public function updateEncadreur($id, $nom, $prenom, $email) {
        $stmt = $this->dd->connect()->prepare("UPDATE encadreur SET nom = :nom, prenom = :prenom, email = :email WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        return $stmt->execute();
    }
    public function deleteEncadreur($id) {
        $stmt = $this->dd->connect()->prepare("DELETE FROM encadreur WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}