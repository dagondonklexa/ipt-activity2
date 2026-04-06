<h2>Add Product</h2>
    
<form method="POST" action="<?php echo e(route('products.store')); ?>">
    <?php echo csrf_field(); ?>

    <input type="text" name="name" placeholder="Product Name"><br><br>
    <input type="text" name="price" placeholder="Price"><br><br>

    <select name="category_id">
        <option value="">Select Category</option>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>">
            <?php echo e($category->cat_name); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select><br><br>

<button type="submit">Save</button>
</form><?php /**PATH C:\Projects\ipt-practice\resources\views/products/create.blade.php ENDPATH**/ ?>