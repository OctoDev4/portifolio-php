<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>
</head>
<body>

<?php

  $welcome = "Oi";
  $name = 'Louco';
  $title = $welcome . ", Portifolio do " . $name;
  $subTitle = "seja bem vindo";
  $yearNow = date("Y");
  $project = "portifolio";
  $isFinished = true; 
  $projectDate = date("d/m/Y H:i:s");
  $description = "meu primeiro portifolio escrito em PHP"

?>

<h1>
<?php
  echo $title;
?>
</h1>

<p>
<?php
  echo $subTitle;
?>
</p>

<p>
<?php
  echo $yearNow;
?>
</p>
<hr>
<div>
    <h2><?=$project?></h2>
    <p><?=$description?></p>


    <div

    <?php if((2023 - $yearNow) > 2): ?>
        style='background-color: burlywood;'
    <?php endif   ?>
    >
      
    <div><?= $projectDate ?></div>

    <div>
       <?php if($isFinished): ?>
        <span>Finalizado ✅</span>
       <?php else: ?>
        <span>Em andamento ⏳</span>
       <?php endif;?>
     </div>

    </div>
</div>
    
</body>
</html>
