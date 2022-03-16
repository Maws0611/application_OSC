<?php
    require('base.php');
?>
    <section>
        
    <h1>Liste des entreprises</h1>

        <?php while ($entreprise = $requet->fetch()){

        ?>

        <p><?= $entreprise['ninea']?> <?= $entreprise['nomEntreprise']?></p>

        <?php

        }

        ?>
        
    </section>
</body>
</html>