<?php
namespace Controller;

use DAO\ContactDAO;

class HomeController {
    private $contactDAO;

    public function __construct(ContactDAO $contactDAO) {
        $this->contactDAO = $contactDAO;
    }

    public function index() {
        // Récupérer la liste de tous les contacts depuis le modèle
       $contacts = $this->contactDAO->getAll();

        // Inclure la vue pour afficher la liste des contacts
        include('../views/home.php');
       
    }
}
?>
