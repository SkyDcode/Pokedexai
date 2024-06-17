<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Public Search</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/search.css')); ?>">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Rechercher des Pokémon</h1>
            <form method="GET" action="<?php echo e(route('pokemon.publicsearch')); ?>" class="search-form">
                <input type="text" name="query" placeholder="Entrez le nom du Pokémon">
                <button type="submit">Rechercher</button>  
            </form>
        </div>
        <?php if(isset($pokemons) && count($pokemons) > 0): ?>
            <div class="pokemon-list">
                <?php $__currentLoopData = $pokemons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pokemon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="pokemon-card">
                        <img src="<?php echo e(asset($pokemon->image)); ?>" alt="<?php echo e($pokemon->name); ?>">
                        <h3><?php echo e($pokemon->name); ?></h3>
                        <p>PV: <?php echo e($pokemon->pv); ?></p>
                        <p>Poids: <?php echo e($pokemon->weight); ?> kg</p>
                        <p>Taille: <?php echo e($pokemon->height); ?> m</p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <p class="text-center">Aucun Pokémon trouvé.</p>
        <?php endif; ?>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\pokedexai\resources\views/pokemons/publicsearch.blade.php ENDPATH**/ ?>