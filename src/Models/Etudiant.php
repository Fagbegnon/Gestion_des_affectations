<?php
namespace App\Models;
use App\Core\Database;  
use PDO;
use PDOException;

class Etudiant {
    protected $dd;

    public function _construct(){
        $this->dd = new Database();
    }
    
    public function getAllEtudiant() {
        $stmt = $this->dd->connect()->prepare("SELECT * FROM etudiant");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEtudiantById($id) {
        $stmt = $this->dd->connect()->prepare("SELECT * FROM etudiant WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function addEtudiant($nom, $prenom, $specialite) {
        $stmt = $this->dd->connect()->prepare("INSERT INTO etudiant (nom, prenom, specialite) VALUES (:nom, :prenom, :specialite)");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $specialite);
        return $stmt->execute();
        
    }
    public function updateEtudiant($id, $nom, $prenom, $specialite) {
        $stmt = $this->dd->connect()->prepare("UPDATE etudiant SET nom = :nom, prenom = :prenom, specialite = :specialite WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':specialite', $specialite);
        return $stmt->execute();
    }
    public function deleteEtudiant($id) {
        $stmt = $this->dd->connect()->prepare("DELETE FROM etudiant WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}