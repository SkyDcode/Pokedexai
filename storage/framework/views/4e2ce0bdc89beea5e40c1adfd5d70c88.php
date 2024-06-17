<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <?php if(session('success')): ?>
                        <div class="mb-4 text-green-600">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    <h1 class="mb-4 text-2xl font-semibold">Rechercher des Pokémon</h1>
                    <form method="GET" action="<?php echo e(route('pokemon.search')); ?>">
                        <div class="mb-3">
                            <input type="text" name="query" class="form-input rounded-md shadow-sm mt-1 block w-full" placeholder="Entrez le nom du Pokémon">
                        </div>
                        <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Rechercher
                        </button>
                    </form>

                    <div class="mt-4">
                        <a href="<?php echo e(route('pokemons.create')); ?>" class="btn btn-success bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Ajouter un Pokémon
                        </a>
                    </div>

                    <?php if(isset($pokemons)): ?>
                        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            <?php $__currentLoopData = $pokemons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pokemon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="bg-white shadow-md rounded-lg overflow-hidden border-2 border-gray-200 relative">
                                    <div class="relative h-48">
                                        <img src="<?php echo e(asset($pokemon->image)); ?>" alt="<?php echo e($pokemon->name); ?>" class="w-full h-full object-cover">
                                    </div>
                                    <div class="p-4">
                                        <h3 class="text-xl font-bold text-gray-800"><?php echo e($pokemon->name); ?></h3>
                                        <p class="text-sm text-gray-600">PV: <?php echo e($pokemon->pv); ?></p>
                                        <p class="text-sm text-gray-600">Poids: <?php echo e($pokemon->weight); ?> kg</p>
                                        <p class="text-sm text-gray-600">Taille: <?php echo e($pokemon->height); ?> m</p>
                                        <p class="text-sm text-gray-600">Type 1: <?php echo e($pokemon->type1 ? $pokemon->type1->name : 'Non spécifié'); ?></p>
                                        <?php if($pokemon->type2): ?>
                                            <p class="text-sm text-gray-600">Type 2: <?php echo e($pokemon->type2 ? $pokemon->type2->name : 'Non spécifié'); ?></p>
                                        <?php endif; ?>
                                        <p class="text-sm text-gray-600">Attaques: <?php echo e($pokemon->attacks->pluck('name')->join(', ')); ?></p>
                                        <div class="mt-4 flex justify-between items-center">
                                            <a href="<?php echo e(route('pokemons.edit', $pokemon->id)); ?>" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Modifier</a>
                                            <form action="<?php echo e(route('pokemons.destroy', $pokemon->id)); ?>" method="POST" class="inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="absolute top-2 right-2 type-badge type-<?php echo e(strtolower($pokemon->type1->name)); ?>">
                                        <?php echo e($pokemon->type1 ? $pokemon->type1->name : 'Type inconnu'); ?>

                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\pokedexai3\resources\views/dashboard.blade.php ENDPATH**/ ?>