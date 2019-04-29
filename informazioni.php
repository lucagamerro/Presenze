<?php 
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
      <li class="nav-item">
        <a class="nav-link" href="vedi.php"><i class="fas fa-table"></i> Presenze</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="informazioni.php"><i class="fas fa-info-circle"></i> Informazioni </a>
      </li>
    </ul>
  </div>
</nav>
<br>
<br>
<div class="jumbotron">
  <h1 class="display-3">Informazioni!</h1>
  <p class="lead"> Sviluppo, idee, contatti e altro</p>
  <hr class="my-4">
  <p> Innazitutto, ci tengo molto a evidenziare il fatto che tutto questo sito, progettato mentalmente durante il campetto di Pasqua di maggio, si nativamente e interamente Open Surce. Per i meno esperti vuol dire:</p>
  <p class="lead">
  <blockquote class="blockquote text-center">
  <i>In informatica il termine inglese open source (che significa sorgente aperta) viene utilizzato per riferirsi ad un software di cui i detentori dei diritti rendono pubblico il codice sorgente, favorendone il libero studio e permettendo a programmatori indipendenti di apportarvi modifiche ed estensioni.</i>
  <footer class="blockquote-footer"> Wikipedia </cite></footer>
  </blockquote>
  <p> Questo valore, nonostante puramente informatico, si rispecchia bene nell'idea di comunita' che ho appreso attraverso gli scout. </p> <br>
    <a class="btn btn-primary btn-lg" href="https://github.com/lucagamerro" role="button"> <i class="fab fa-github"></i>  Codice su GitHub </a> <br> <br>
  <p>  Infine, se volete contattarmi, potete farlo da <a type="button" class="btn btn-primary btn-sm" href="https://lucagamerro.carrd.co"> QUI </a></p>
  </p>
</div>
<small class="form-text text-muted"> Creato da Luca Gamerro. Codice rilasciato sotto MIT License.</small>
</html>
