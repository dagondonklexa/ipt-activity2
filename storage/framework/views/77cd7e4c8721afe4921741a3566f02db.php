<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'My Laravel App'); ?></title>
    <!-- Bootstrap CSS Link -->
    
     <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body>

    <div class="container mx-auto">
        
        <?php echo $__env->yieldContent('content'); ?>
    </div>

   
</body>
</html>
<?php /**PATH C:\Users\Administrator\ipt-activity2\resources\views/layouts/app.blade.php ENDPATH**/ ?>