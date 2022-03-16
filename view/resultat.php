<?php
$ninea= $_POST['ninea'];

$nomEntreprise= $_POST['nomEntreprise'];


// connect DATABASE
$connect= new mysqli('localhost', 'root', '', 'applicationnousfemme');

if($connect->connect_error){

    die("Error connecting to database:" .$connect->connect_error);

}else{

    $donne= $connect->prepare("INSERT INTO entreprises(ninea, nomEntreprise) VALUES (?, ?)");

    $donne->bind_param('is', $ninea, $nomEntreprise);

    $donne->execute();

    echo "$nomEntreprise est  bien enrégistrer";

    $donne->close();

    $connect->close();
}
?>