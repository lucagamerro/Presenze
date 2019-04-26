<?php 

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
<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
  <div class="card-header"> Oops! 😳</div>
  <div class="card-body">
    <h4 class="card-title"> Parte privata </h4>
    <p class="card-text"> I dati contenuti in questa tabella sono da considerarsi "sensibili", e sono quindi protetti da password. Completa il seguete form per accedervi:</p>
    <form action="tabella.php">
       <input type="password" name="pw" placeholder="Password" />
       <input type="submit" value="Vai" />
    </form> 
  </div>
</div>
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
