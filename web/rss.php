<?php
$db = new PDO('mysql:host=database;dbname=lamp;charset=utf8','lamp','lamp');
// Récupération des données dans la base de données (MySQL)
$liste = $db->query("SELECT * FROM tl_liens ORDER BY lien_id desc LIMIT 0,15");
?>
<?xml version="1.0" encoding="UTF-8"?>

<rss version="2.0">
    <channel>
        <title>Watson</title>
        <description>Watson - Articles</description>
        <link>https://ue3d18.lndo.site/rss.php</link>
        <?php
        // Boucle qui liste les items
        while( $a = $liste->fetch()) { ?>
            <item>
                <fieldset>
                    <p>Titre de l'article : </p>
                    <h2><?= $a['lien_titre'] ?></h2>
                    <p>Lien :</p>
                    <link><?= $a['lien_url'] ?></link>
                    <br>
                    <p>Description : </p>
                    <description><?= $a['lien_desc'] ?></description>
                </fieldset>
                <br>
            </item>
            <?php
        }
        ?>
    </channel>
</rss>