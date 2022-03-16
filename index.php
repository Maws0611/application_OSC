<?php

require('controller/controller.php');

if (isset($_GET['page'])){

    if($_GET['page']=='entreprises'){

        CreateAccount();

    }
    
    elseif ($_GET['page']=='accueil') {
        
        home();
        formulaire();
    }

    // elseif ($_GET['page']=='form'){
        
            
    //     }
    
}