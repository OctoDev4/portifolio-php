<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>


<body class="bg-slate-900 text-gray-200">
    
   <?php include('./components/header.php'); ?>


<main class="mx-auto max-w-screen-lg  min-h-20 px-3 py-6">

    <!-- Hero-->
      

    <?php include('./components/hero.php') ?>


    
    <!--projects-->
    <section class="space-y-3 py-6">
        

        <h2 class="text-2xl font-bold" id="projects">meus projetos</h2>

        <!--projects-->
         <?php  include('./components/projects.php'); ?>
        

       
    
    </section>
</main>

<footer class=" min-h-20 mx-auto max-w-screen-lg">

    <!--data-->
    <div class="border-t border-gray-600 pt-6 px-3 text-gray-400">
        © Copyright <?=date('Y') ?> . Construido por mim mesmo
    </div>
</footer>

</body>
</html>