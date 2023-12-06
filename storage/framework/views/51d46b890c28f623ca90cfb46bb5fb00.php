<?php if (isset($component)) { $__componentOriginal165f8e34452936f6da18fceb86497519 = $component; } ?>
<?php $component = App\View\Components\App::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\App::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> Employees <?php $__env->endSlot(); ?>
    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">EMPLOYEE ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PHONE NUMBER</th>
                    <th scope="col">SALARY</th>
                    <th scope="col">COMMISSION PCT</th>
                    <th scope="col">DEPARTMENT ID</th>
                    <th scope="col">HIRE DATE</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="">
                        <td scope="row"><?php echo e($loop->iteration); ?></td>
                        <td scope="row"><?php echo e($employee->EMPLOYEE_ID); ?></td>
                        <td><?php echo e($employee->FIRST_NAME . ' ' . $employee->LAST_NAME); ?></td>
                        <td><?php echo e($employee->EMAIL); ?></td>
                        <td><?php echo e($employee->PHONE_NUMBER); ?></td>
                        <td><?php echo e(number_format($employee->SALARY, 2)); ?></td>
                        <td><?php echo e($employee->COMMISSION_PCT); ?></td>
                        <td><?php echo e($employee->DEPARTMENT_ID); ?></td>
                        <td><?php echo e($employee->HIRE_DATE); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr class="">
                        <td colspan="7" scope="row">No Data Found</td>
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
<?php /**PATH K:\AI\laravel-11-5-23\projects\demo_project\resources\views/hr/employees.blade.php ENDPATH**/ ?>