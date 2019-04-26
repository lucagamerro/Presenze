<?php
$reset = $_GET['pwreset'];
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
        <a class="nav-link" href="index.html"> Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="send.php"> Presenze <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<br>
       <?php if ($reset == "root"): ?>
          <div class="alert alert-dismissible alert-warning">
             <h4 class="alert-heading"> Pronto per una nuova uscita! </h4>
             <p class="mb-0"> Tabella presenze resettata correttamente. </p>
          </div>
       <?php else: ?>
          <div class="alert alert-dismissible alert-warning">
             <h4 class="alert-heading"> Password errata! </h4>
             <p class="mb-0"> La password inserita e' sbagliata, riprovare. Pass inserita: "<?php echo $reset; ?>" </p>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<small class="form-text text-muted"> Creato da Luca Gamerro. Codice rilasciato sotto MIT License.</small>
</html>
