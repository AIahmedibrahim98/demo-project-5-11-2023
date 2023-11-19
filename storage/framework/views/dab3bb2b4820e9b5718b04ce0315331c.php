<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="container">
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <?php

        ?>
        <?php ($x = 10); ?>

        
        <?php echo "<h1 class='text-primary'>Hello from blade</h1>"; ?>


        <?php if($x == 10): ?>
            <h2>X = 10</h2>
        <?php elseif($x == 9): ?>
            <h3>X = 9</h3>
        <?php else: ?>
            <h1 class="text-danger">X = <?php echo e($x); ?></h1>
        <?php endif; ?>

        <?php if (! ($x > 10)): ?>
            XXXXXXXXXXXXXXXXXXXXXXXXXXXX
        <?php endif; ?>

      

        <?php switch($x):
            case (10): ?>
            <h1>form switch x = 10</h1>
                <?php break; ?>
        <?php case (9): ?>
        <h1 class="text-primary">form switch x = 10</h1>
        <?php break; ?>
            <?php default: ?>
            <h1 class="text-danger">form switch x not match</h1>
        <?php endswitch; ?>

        <?php ($y = 1); ?>
        <?php while($y < 10): ?>
       <p> <?php echo e($y++); ?></p>
        <?php endwhile; ?>

        <?php for($i = 0 ; $i <= 10 ; $i++): ?>
            <h1 class="text-primary"><?php echo e('Current value of i ' . $i); ?></h1>
        <?php endfor; ?>

<hr><hr><hr><hr><hr><hr><hr>
        <?php ($names = ['ahmed','ali','maha','sara','adel']); ?>
        
        <h2 class="text-info">Names In Class</h2>
        
        
        

        

            
        

        <?php $__empty_1 = true; $__currentLoopData = $names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php if($loop->first): ?>
            <p>i'm in first iteration now</p>
        <?php endif; ?>
        <h1><?php echo e($loop->iteration .')'. $name); ?></h1>
        <?php if($loop->last): ?>
        <p>i'm in last iteration now</p>
    <?php endif; ?>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h4>No data Found</h4>
        <?php endif; ?>
    </main>

    <?php ($isActive = false); ?>

    
    
    <h1 class="<?php echo \Illuminate\Support\Arr::toCssClasses(['d-inline','text-success'=>$isActive,'text-danger'=>!$isActive]); ?>">User Status </h1><small>if text red user is deactive</small>
    <p style="<?php echo \Illuminate\Support\Arr::toCssStyles([
        'font-weight: 900'=> 1==9
    ]) ?>">hello</p>

    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH K:\AI\laravel-11-5-23\projects\demo_project\resources\views/lec5.blade.php ENDPATH**/ ?>