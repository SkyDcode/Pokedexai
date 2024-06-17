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
                        <div class="mt-4">
                            <h2 class="text-xl font-semibold">Liste des Pokémon</h2>
                            <div class="flex overflow-x-auto space-x-4">
                                <?php $__currentLoopData = $pokemons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pokemon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="flex-none bg-white shadow-md rounded-lg p-4 w-64">
                                        <img src="<?php echo e(asset($pokemon->image)); ?>" alt="<?php echo e($pokemon->name); ?>" class="w-full h-48 object-cover rounded-lg">
                                        <h3 class="text-lg font-semibold mt-2"><?php echo e($pokemon->name); ?></h3>
                                        <p>PV: <?php echo e($pokemon->pv); ?></p>
                                        <p>Poids: <?php echo e($pokemon->weight); ?> kg</p>
                                        <p>Taille: <?php echo e($pokemon->height); ?> m</p>
                                        <div class="mt-2">
                                            <a href="<?php echo e(route('pokemons.edit', $pokemon->id)); ?>" class="btn btn-warning bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">
                                                Modifier
                                            </a>
                                            <form action="<?php echo e(route('pokemons.destroy', $pokemon->id)); ?>" method="POST" class="inline ml-2">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                                                    Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
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
<?php /**PATH C:\laragon\www\pokedexai\resources\views/dashboard.blade.php ENDPATH**/ ?>