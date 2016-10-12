
<div class="top">
   

    <?php
    //var_dump($db->requete("Select * from livre"));
    foreach ($clubs as $club):
        ?>
        <div>
            <div>
                <h4><ins><?= $club->getNom(); ?></ins></h4> 
                <small><p><?= $club->getAdresse(); ?></p></small>  
                <a href="club.php?action=club&id=<?= $club->getId(); ?>"> Licences du club </a> 
            </div>
        </div>
<?php endforeach; ?>
</div>




