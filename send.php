<?php 
$hostname = "localhost";
$dbname = "presenze";
$user = "id9399911_root";
$pass = "pati97";
$nome = $_GET['nome'];
$presenza = $_GET['presenza'];
$nontrovato = " ";

try {
    $db = new PDO ("mysql:host=$hostname;dbname=$dbname", $user, $pass);
    if (date('j') == 1):
       $db->query("DELETE * FROM presenza");
    endif;
    
} catch (PDOException $e) {
    echo "Errore: " . $e->getMessage();
    die();
}

$db->query("CREATE TABLE 'presenza'
                           ( 'nome' VARCHAR(30) NOT NULL ,
                             'presente' TEXT NOT NULL)");

$db->query("INSERT INTO presenza (nome, presente) VALUES ('$nome', '$luca')");
?>

<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title> Presenze </title> 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.html"> Presenze Uscite! </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link active" href="index.html"> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vedi.php"> Presenze <span class="sr-only"></span></a>
      </li>
    </ul>
  </div>
</nav>
<br> 
<br>
<div class="alert alert-dismissible alert-warning">
     <h4 class="alert-heading"> Inviato! </h4>
     <p class="mb-0"> Presenza inviata correttamente. Ricorda di utilizzare questo trumento in modo sicuro e responsabile. </p>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<small class="form-text text-muted"> Creato da Luca Gamerro. Codice rilasciato sotto MIT License. </small>
</html>
