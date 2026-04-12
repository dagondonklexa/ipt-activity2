<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'My Laravel App'); ?></title>
     <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body>
    <div class="mx-auto w-full h-screen flex flex-col">
        <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <main class="flex-1">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
         <?php echo $__env->make("partials.footer", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ipt-activity2\resources\views/layouts/app.blade.php ENDPATH**/ ?>