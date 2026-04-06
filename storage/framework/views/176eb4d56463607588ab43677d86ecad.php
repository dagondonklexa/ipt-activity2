<h2>Categories</h2>

<a href="<?php echo e(route('categories.create')); ?>">Add Category</a>

<ul>
<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
        <?php echo e($category->cat_name); ?> - <?php echo e($category->cat_color); ?>

    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\Projects\ipt-practice\resources\views/categories/index.blade.php ENDPATH**/ ?>