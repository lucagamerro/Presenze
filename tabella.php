<?php 
$salt = '1dh3(3@2';
$pw = $_GET['pw'];
$hashuser = md5($pw . $salt);
$hashvero = md5("root" . $salt);
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
        <a class="nav-link active" href="index.html"> Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="vedi.php"> Presenze <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<br>
<br>
<br>
<?php if ($hashuser == $hashvero:): ?>
         <h1> Presenze: </h1>
<?php else: ?>
        <div class="alert alert-dismissible alert-danger">
             <button type="button" class="close" data-dismiss="alert">&times;</button>
             <strong> Errore! </strong> <a class="alert-link"> Password errata </a>
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
