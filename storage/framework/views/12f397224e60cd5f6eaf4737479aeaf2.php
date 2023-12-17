<?php if (isset($component)) { $__componentOriginal165f8e34452936f6da18fceb86497519 = $component; } ?>
<?php $component = App\View\Components\App::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\App::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> Tasks Page <?php $__env->endSlot(); ?>
     <?php $__env->slot('header', null, []); ?> Tasks <?php $__env->endSlot(); ?>
    <div class="table-responsive">
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">due date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Assign To</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="">
                        <td scope="row"><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($task->title); ?></td>
                        <td><?php echo e($task->description); ?></td>
                        <td><?php echo e($task->due_date); ?></td>
                        <td><?php echo e($task->user->name); ?></td>
                        <td><?php echo e($task->task_type->name); ?></td>
                        
                        <td><?php echo e(date_format(date_create($task->created_at), 'Y-m-d h:i:s a')); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr class="">
                        <td colspan="7" scope="row">
                            <h3 class="text-center">No Data Found</h3>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal165f8e34452936f6da18fceb86497519)): ?>
<?php $component = $__componentOriginal165f8e34452936f6da18fceb86497519; ?>
<?php unset($__componentOriginal165f8e34452936f6da18fceb86497519); ?>
<?php endif; ?>
<?php /**PATH K:\AI\laravel-11-5-23\projects\demo_project\resources\views/tasks/index.blade.php ENDPATH**/ ?>