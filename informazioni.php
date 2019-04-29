<?php 
$nome = $_GET['nome'];
$sq= $_GET['sq'];
$si = $_GET['si'];
$nontrovato = " ";
$verra = "";
$sp = ' 
';
if ($nome == ""):
    $nontrovto = ".";
endif;
if (date('j') == 1):
    unlink("presenze.csv");
    $f = fopen("presenze.csv", "a");
    fwrite($f, "NOME ;");
    fwrite($f, "SQUADRIGLIA ; ");
    fwrite($f, $sp);
    fclose($f); 
endif;

if ($si == 'si'):
    $verra = "Si";
else:
    $verra = "No";
endif;
    

$f = fopen("presenze.csv", "a");
fwrite($f, $nome);
fwrite($f, ';');
fwrite($f, $sq);
fwrite($f, ';');
fwrite($f, $verra);
fwrite($f, ';');
fwrite($f, $sp);
fclose($f);

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
        <a class="nav-link" href="index.html"> <i class="fas fa-home"></i> Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="vedi.php"><i class="fas fa-table"></i> Presenze <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="informazioni.php"><i class="fas fa-info-circle"></i> Informazioni</a>
      </li>
    </ul>
  </div>
</nav>
<br> 
<br>
<?php if ($nontrovato == " "): ?>
<div class="alert alert-dismissible alert-warning">
     <h4 class="alert-heading"> Inviato! </h4>
     <p class="mb-0"> Presenza inviata correttamente. Ricorda di utilizzare questo trumento in modo sicuro e responsabile. </p>
</div>
<?php endif; ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<small class="form-text text-muted"> Creato da Luca Gamerro. Codice rilasciato sotto MIT License. </small>
</html>
