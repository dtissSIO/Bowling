
<div class="top">


    <?php
    //var_dump($db->requete("Select * from livre"));
    //Affichage de la liste des clubs
    if ($clubs) {
        foreach ($clubs as $club):
            ?>
            <div>
                <div>
                    <h4><ins><?= $club->getNom(); ?></ins></h4> 
                    <small><p><?= $club->getAdresse(); ?></p></small>  
                    <a href="club.php?action=club&id=<?= $club->getId(); ?>"> Licences du club </a> 
                </div>
            </div
        <?php endforeach;
    }
    ?>
    <!-- Création d'un nouveau club   -->
    <div>
        <h3>Création d'un nouveau club</h3> 
        <form action="club.php?action=ajouter" method="post">
            <p>Nom : <input type="text" name="nom" /></p>
            <p>Adresse : <input type="text" name="adresse" /></p>
            <p>Email : <input type="text" name="email" /></p>
            <p><input type="submit" value="OK"></p>
        </form>

    </div>
</div>




