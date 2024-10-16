<?php

$items = [
    [
        'href' => '#projects',
        'text' => 'Projetos'
    ],
    [
        'href' => '#',
        'text' => 'Github'
    ],
    [
        'href' => '',
        'text' => 'Linkedin'
    ],
];

?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
    <!-- logo-->
    <div class="font-bold text-xl text-cyan-600">
        Meu Portfolio
    </div>

    <!-- links-->
    <div class="">
        <ul class="flex space-x-3 font-medium">
            <?php foreach ($items as $item): ?>
                <li>
                    <a href="<?= $item['href'] ?>" class="hover:underline">
                        <?= $item['text'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</header>
