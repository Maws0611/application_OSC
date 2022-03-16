<?php

require_once('model/CreateAccount.php');

require_once('model/Form.php');

function CreateAccount(){

    $CreateAccount= new CreateAccount();

    $requet= $CreateAccount->getAccount();

    require('view/CreateAccountView.php');

}

function home(){

    require('view/accueilView.php');
    
}


function formulaire(){

    // $Form = new Form();
    // $Form->ninea=$_POST['ninea'];
    // $Form->nomEntreprise = $_POST['nomEntreprise'];

    // echo "$this->nomEntreprise est  bien enrégistrer";
    // $requet= $Form->getForm();

    require('view/formulaireView.php');
    require('view/resultat.php');
}