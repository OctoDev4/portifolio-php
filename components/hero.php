<?php

$items = [
    [
        'href' => '',
        'src' => 'assets/twitter.png',
        'alt' => 'Twitter logo'
    ],
    [
        'href' => '',
        'src' => 'assets/facebook.png',
        'alt' => 'Facebook'
    ],
    [
        'href' => '',
        'src' => 'assets/linkedin.png',
        'alt' => 'Linkedin'
    ],
];

?>




<section class="flex gap-x-3">
        

        <!-- title and description-->
        <div class=" w-2/3">


            <h1 class="text-3xl font-bold"> oi, meu nome é Felipe</h1>

            <p class="text-xl leading-8 mt-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque ad sequi aliquid ab incidunt veritatis voluptates, neque a nostrum, sapiente minus cumque? Voluptate dolorum fuga dolores incidunt perferendis aut suscipit.</p>


                <ul class="flex space-x-3 mt-4  font-medium">
                     <?php foreach ($items as $item): ?>

                         <li>
                             <a target="_blank" href="<?= $item['href'] ?>" class="hover:underline  hover:animate-ping"><img class="h-8" src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>"></a>
                         </li>

                     <?php endforeach; ?>
                </ul>

          
        </div>
    
         <!-- image-->
        <div class="w-1/3  flex items-center justify-center">
            <div>
              <img class="h-60 rounded-full hover:animate-spin" src="assets/polvoeu.jpg" alt="">
            </div>
        </div>
    </section>