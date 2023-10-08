<?php
/**
 * c'est la classe principale
 */

include('config.php');

use Controller\HomeController;
use DAO\ContactDAO;


    $contactDAO = new ContactDAO($pdo);
    $home = new HomeController($contactDAO);

    $home->index();
?>