<?php 
$salt = '1dh3(3@2';
$pw = $_GET['pw'];
$hashuser = md5($pw . $salt);
$hashvero = md5("root" . $salt);

if (date('j') == 1):
    unlink("presenze.csv");
    $f = fopen("presenze.csv", "a");
    fwrite($f, "NOME ;");
    fwrite($f, "PRESENZA ");
    fwrite($f, $sp);
    fclose($f); 
endif;
?> 

<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title></title> 
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
        <a class="nav-link" href="index.html"> <i class="fas fa-home"></i> Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="send.php"><i class="fas fa-table"></i> Presenze <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="informazioni.php"><i class="fas fa-info-circle"></i> Informazioni</a>
      </li>
    </ul>
  </div>
</nav>
<br>
<br>
<br>
<?php if ($hashuser == $hashvero): ?>
<div class="card border-light mb-3" style="max-width: 20rem;">
  <div class="card-header"> Tutto a posto </div>
  <div class="card-body">
    <h4 class="card-title"><b> Scarica la tabella delle presenze: </b></h4>
    <p class="card-text"> Ecco il file: <a type="button" class="btn btn-outline-success" href="presenze.csv"> Download </a> </p>
  </div>
</div>
<?php else: ?>
        <div class="alert alert-dismissible alert-danger">
             <button type="button" class="close" data-dismiss="alert">&times;</button>
             <strong> Errore! </strong> <a class="alert-link" href="vedi.php"> Password errata. Ritenta. </a>
       </div>
<?php endif; ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<small class="form-text text-muted"> Creato da Luca Gamerro. Codice rilasciato sotto MIT License. </small>
</html>
