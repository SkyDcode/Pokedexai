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
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Modifier un Pokémon')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="<?php echo e(route('pokemons.update', $pokemon->id)); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                        <div>
                            <label for="name" class="block font-medium text-sm text-gray-700"><?php echo e(__('Nom')); ?></label>
                            <input id="name" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="name" value="<?php echo e(old('name', $pokemon->name)); ?>" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="pv" class="block font-medium text-sm text-gray-700"><?php echo e(__('Points de vie (PV)')); ?></label>
                            <input id="pv" class="form-input rounded-md shadow-sm mt-1 block w-full" type="number" name="pv" value="<?php echo e(old('pv', $pokemon->pv)); ?>" required />
                        </div>

                        <div class="mt-4">
                            <label for="weight" class="block font-medium text-sm text-gray-700"><?php echo e(__('Poids')); ?></label>
                            <input id="weight" class="form-input rounded-md shadow-sm mt-1 block w-full" type="number" step="0.01" name="weight" value="<?php echo e(old('weight', $pokemon->weight)); ?>" required />
                        </div>

                        <div class="mt-4">
                            <label for="height" class="block font-medium text-sm text-gray-700"><?php echo e(__('Taille')); ?></label>
                            <input id="height" class="form-input rounded-md shadow-sm mt-1 block w-full" type="number" step="0.01" name="height" value="<?php echo e(old('height', $pokemon->height)); ?>" required />
                        </div>

                        <div class="mt-4">
                            <label for="type1_id" class="block font-medium text-sm text-gray-700"><?php echo e(__('Type 1')); ?></label>
                            <select id="type1_id" name="type1_id" class="form-select rounded-md shadow-sm mt-1 block w-full" required>
                                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($type->id); ?>" <?php echo e($type->id == $pokemon->type1_id ? 'selected' : ''); ?>><?php echo e($type->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="mt-4">
                            <label for="type2_id" class="block font-medium text-sm text-gray-700"><?php echo e(__('Type 2 (optionnel)')); ?></label>
                            <select id="type2_id" name="type2_id" class="form-select rounded-md shadow-sm mt-1 block w-full">
                                <option value=""><?php echo e(__('Aucun')); ?></option>
                                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($type->id); ?>" <?php echo e($type->id == $pokemon->type2_id ? 'selected' : ''); ?>><?php echo e($type->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="mt-4">
                            <label for="image" class="block font-medium text-sm text-gray-700"><?php echo e(__('Image')); ?></label>
                            <input id="image" class="form-input rounded-md shadow-sm mt-1 block w-full" type="file" name="image" />
                            <?php if($pokemon->image): ?>
                                <div class="mt-2">
                                    <img src="<?php echo e(asset($pokemon->image)); ?>" alt="<?php echo e($pokemon->name); ?>" class="w-32 h-32 object-cover">
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                <?php echo e(__('Mettre à jour le Pokémon')); ?>

                            </button>
                        </div>
                    </form>
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
<?php /**PATH C:\laragon\www\pokedexai\resources\views/pokemons/edit.blade.php ENDPATH**/ ?>