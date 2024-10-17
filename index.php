<?php 

    include_once __DIR__ .'/controller/baseController.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Classement 2024 des langages de programmation">
    <title>Classement 2024 des langages de programmation</title>
    <link rel="stylesheet" href="./public/css/main.css">
</head>
<body>
    <header>
        
        <h1>
            📈<?=  $newUser->_title ?>
        </h1>
    </header>

    <main>
        <div class="table-primary" role="region" aria-labelledby="compilation">
            <table>
              
                <caption>🤴 <?= User::$_tabletitle ?></caption>
                <thead>
                    <th>Rang</th>
                    <th>Langage</th>
                    <th>Description</th>
                    <th>Utilisation principale</th>
                </thead>
                <tbody>

                  <!--   <tr>
                        <td>1</td>
                        <td>Python</td>
                        <td>Polyvalent, utilisé en IA, Data Science, développement web et automatisation</td>
                        <td>IA, analyse de données, backend web</td>
                    </tr> -->
                <?php foreach ($users as $user): ?>
                    <tr>
                        
                        <?= 
                            "<td>".htmlspecialchars($user['id_rang'])."</td>
                            <td>".htmlspecialchars($user['langage'])."</td>
                            <td>".htmlspecialchars($user['description'])."</td>
                            <td>".htmlspecialchars($user['utilisation_principale'])."</td>" 
                        ?>
                    
                    </tr>

            
                <?php endforeach; ?>  
                
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <p>
            &copy; - MIT - <?= $date->format('Y') ?><br>
            <img src="../asset/militello-all-rights-reserved-for-educational-purposes-only.svg" alt="Militello Giuseppe">
        </p>
    </footer>

</body>
</html>