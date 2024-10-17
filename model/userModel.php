<?php
    # fonction pour la config
    require_once 'config.php';
    
    function getUsers($conn) {
        $query = "SELECT * FROM top_10_langages_2024"; # le corps de la requete SQL
        $statement = $conn->prepare($query);
        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
   