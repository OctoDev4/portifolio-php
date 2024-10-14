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
$title = $welcome . ", Portfólio do " . $name;
$subTitle = "seja bem-vindo";
$yearNow = date("Y");

$projects = [
    (object) [
        'name' => 'Portfólio',
        'description' => 'Meu primeiro portfólio escrito em PHP',
        'isFinished' => true,
        'date' => 2024,
    ],
    (object) [
        'name' => 'Site de Compras',
        'description' => 'Um site para compra de produtos online',
        'isFinished' => false,
        'date' => 2023,
    ],
    (object) [
        'name' => 'Blog Pessoal',
        'description' => 'Um blog para compartilhar minhas ideias e projetos',
        'isFinished' => true,
        'date' => 2023,
    ],
];

function verifyIsFinished($project) {
    return $project->isFinished 
        ? '<span style="color:green">finalizado</span>' 
        : '<span style="color:red">não finalizado</span>';
}

$filteredProjects = array_filter($projects, function($project) {
    return $project->date === 2023; 
});


?>

<h1><?= $title ?></h1>
<p><?php echo $subTitle; ?></p>
<p><?php echo $yearNow; ?></p>
<hr>

<?php if (empty($filteredProjects)): ?>
    <p>Não há projetos para mostrar.</p>
<?php else: ?>
    <?php foreach ($filteredProjects as $project): ?>
        <div>
            <h2><?php echo $project->name; ?></h2>
            <p><?php echo $project->description; ?></p>
            <div>
                <div><?php echo $project->date; ?></div>
                <div><?=verifyIsFinished($project); ?></div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>
