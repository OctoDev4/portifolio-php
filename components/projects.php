<?php 
$projects = [
    (object) [
        'name' => 'Portfólio', 
        'description' => 'Meu primeiro portfólio escrito em PHP',
        'isFinished' => true, 
        'date' => 2024, 
        'stack'=>['PHP','JS','CSS','HTML'], 
        'img'=>'https://picsum.photos/200' 
    ],
    (object) [
        'name' => 'Site de Compras',
        'description' => 'Um site para compra de produtos online',
        'isFinished' => false, 
        'date' => 2023,
        'stack'=>['NEXTJS','NODE','TAILWIND','SQL'],
        'img'=>'https://picsum.photos/200' 
    ],
    (object) [
        'name' => 'Blog Pessoal',
        'description' => 'Um blog para compartilhar minhas ideias e projetos',
        'isFinished' => true, 
        'date' => 2023,
        'stack'=>['PHP','JS','CSS','HTML'], 
        'img'=>'https://picsum.photos/200' 
    ],
];
?>

<!-- Loop para percorrer cada projeto e exibir suas informações -->
<?php foreach ($projects as $project): ?>
    <div class="bg-slate-800 rounded-lg p-3 flex items-center">

        <div class="w-1/5 space-y-3 flex items-center justify-center">
            <img class="h-32 rounded-md shadow-xl shadow-black" src="<?= $project->img ?>" alt=""> <!-- Exibe a imagem do projeto -->
        </div>

        <div class="w-4/5 space-y-3">
            <div class="flex gap-3 justify-between">
                <h3 class="font-semibold text-xl">
                    <?= $project->name; ?> 
                    <?php if ($project->isFinished): ?>
                        ✔️ <!-- Emoji indicando que o projeto foi finalizado -->
                        <span class="text-xs text-gray-400 opacity-50">( Finalizado em <?= $project->date; ?>) </span>
                    <?php else: ?>
                        ⏳ <!-- Emoji indicando que o projeto está em andamento -->
                        <span class="text-xs text-gray-400 opacity-50">( Em andamento )</span>
                    <?php endif; ?>
                </h3>
                
                <div class="space-x-1">
                    <?php 
                    // Array de cores para as tecnologias
                    $colors = ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'teal', 'purple'];
                
                    // Loop para percorrer cada tecnologia na pilha do projeto
                    foreach($project->stack as $position => $tech): ?>
                        <!-- Exibe cada tecnologia com uma cor de fundo e texto -->
                        <span class="bg-<?=$colors[$position]?>-400 text-<?= $colors[$position]?>-900 rounded-md px-2 py-1 font-medium text-sm">

                            <?= $tech; ?>

                        </span>

                    <?php endforeach; ?>
                </div>
            </div>

            <p class="leading-6">
                <?= $project->description ?>
            </p>
        </div>
    </div>
<?php endforeach; ?>
