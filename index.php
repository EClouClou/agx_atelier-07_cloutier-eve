<!DOCTYPE html>
<html lang="ca-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>De merveilleux peintres</title>
</head>
<body>
    <?php
    include "db_conn.php";
    $conn = ouvreConnexion();
    ?>
    <header class="header_title">
    <h1>De merveilleux peintres</h1>
    </header>
    <main>
    <?php
   $query = "SELECT * FROM `informations`;"; // Définit la requête SQL que nous désirons effectuer 
   $result = $conn->query($query); // Effectue la reque^te sqo à la db définie sous "$conn"
   
   if ($result->num_rows > 0) {
       // echo "Il y a plus qu'une row!"; 
       while ($row = $result->fetch_assoc()) {
           echo
           "<section class=\"card\">
               <header class=\"card__header\">
                   <div class=\"nom-artiste\">
                   <h2>" . $row["prénom"] . "</h2>
                   <h2>" . $row["nom"] . "</h2>
                   </div>
                   <div class=\"donnees-naissance\">
                   <p>" . $row["annee_naissance"] . "</p>
                   </div>
                   <div class=\"ville-naissance\">
                   <p>" . $row["ville_naissance"] . "</p>
                   </div>
               </header>
               <figure>
               <img src=\"" . $row["oeuvre_image_url"] . "\" alt=\" " . $row["prénom"] . "  \" />
               <figcaption>" .$row["oeuvre_celebre"] . "</figcaption>
               </figure>
           </section>";
        }
    }
    ?>
    </main>
    <footer>
    <div>
        <div>
        <h3>Eve Cloutier • PMI</h3>
        <p><time datetime="2024-11-19">19 novembre 2024</time></p>
        </div>
    </div>
    </footer>
</body>
</html>