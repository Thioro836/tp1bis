<?php
namespace Model;
class ContactModel {
    private int $id;
    private string $nom;
    private $prenom;
    private $email;
    private $telephone;
    
    //Rajouter le constructeur, les getters et setters
    function __construct()
    {
        
    }
    function getId(){
        return $this->id;
    }
    function  setId(int $id ){
       $this->id=$id;
    }
    function getPrenom(){
        return $this->prenom;
    }
    function  setPrenom(string $prenom ){
       $this->prenom=$prenom;
    }
    function getNom(){
        return $this->nom;
    }
    function  setNom(string $nom ){
       $this->nom=$nom;
    }
    function getEmail(){
        return $this->email;
    }
    function  setEmail(string $email ){
       $this->email = $email;
    }
    function getTelephone(){
        return $this->telephone;
    }
    function  setTelephone(string $telephone ){
       $this->telephone=$telephone;
    }
    // Vous pouvez ajouter des méthodes supplémentaires ici pour manipuler les données du contact
}
?>
