<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>
</head>
<body>

<?php

$welcome = "Oi";
$name = 'Louco';
$title = $welcome . ", Portfólio do " . $name;
$subTitle = "seja bem vindo";
$yearNow = date("Y");

$projects = [
    (object) [
        'name' => 'Portfólio',
        'description' => 'meu primeiro portfólio escrito em PHP',
        'isFinished' => true,
        'date' => date("d/m/Y H:i:s"),
    ],
    // Você pode adicionar mais projetos aqui como novos objetos
];

?>

<h1>
    <?php echo $title; ?>
</h1>

<p>
    <?php echo $subTitle; ?>
</p>

<p>
    <?php echo $yearNow; ?>
</p>
<hr>

<?php foreach ($projects as $project): ?>
    <div>
        <h2><?= $project->name ?></h2>
        <p><?= $project->description ?></p>

        <div <?php if((2023 - $yearNow) > 2): ?> style='background-color: burlywood;' <?php endif; ?>>
            <div><?= $project->date ?></div>

            <div>
                <?php if($project->isFinished): ?>
                    <span>Finalizado ✅</span>
                <?php else: ?>
                    <span>Em andamento ⏳</span>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>

</body>
</html>
