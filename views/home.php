<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Contacts</title>
    <!-- Ajoutez ici vos liens CSS ou styles pour la mise en forme -->
</head>
<body>
    <h1>Liste des Contacts</h1>
    <a href="ajouter_contact.php">Ajouter un contact</a>


        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($contacts as $contact): ?>
                    <tr>
                        <td><?php echo $contact->getNom(); ?></td>
                        <td><?php echo $contact->getPrenom(); ?></td>
                        <td><?php echo $contact->getEmail(); ?></td>
                        <td><?php echo $contact->getTelephone(); ?></td>
                        <td>
                            <a href="voir_contact.php?id=<?php echo $contact->getNom(); ?>">Voir</a>
                            <a href="modifier_contact.php?id=<?php echo $contact->getNom(); ?>">Modifier</a>
                            <a href="supprimer_contact.php?id=<?php echo $contact->getNom(); ?>">Supprimer</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
            </tbody>
        </table>

        <p>Aucun contact trouve.</p>

</body>
</html>

