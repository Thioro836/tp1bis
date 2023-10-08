<?php
namespace DAO;

use Model\ContactModel;
use PDO;

class ContactDAO {
    private $pdo;
    private $contacts;
    public function __construct(PDO $pdo) {
        $this->contacts = [];
        $this->pdo = $pdo;
    }

    // Méthode pour insérer un nouveau contact dans la base de données
    public function create(ContactModel $contact) {
        
    }

    // Méthode pour récupérer un contact par son ID
    public function getById($id) {
       
    }

    // Méthode pour récupérer la liste de tous les contacts
    public function getAll() {
       
        $sql = "select * from contacts";
        $result = $this->pdo->query($sql);
        while($row=$result->fetch(PDO::FETCH_ASSOC)){
            $contact = new ContactModel();
            $contact->setId($row["id"]);
            $contact->setNom($row["nom"]);
            $contact->setPrenom($row["prenom"]);
            $contact->setEmail($row["email"]);
            $contact->setTelephone($row["telephone"]);
            $this->contacts[] = $contact;
        }

        return $this->contacts;
       
    }

    // Méthode pour mettre à jour un contact
    public function update(ContactModel $contact) {
       
    }

    // Méthode pour supprimer un contact par son ID
    public function deleteById($id) {
       
    }
}
?>
