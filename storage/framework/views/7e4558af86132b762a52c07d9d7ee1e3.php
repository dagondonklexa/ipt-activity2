<h2>Edit Product</h2>

<form action ="<?php echo e(route ('products.update',$product->id)); ?>" method ="POST">
    <?php echo csrf_field(); ?> 
    <?php echo method_field('PUT'); ?>

    <input type="text" name="name" value="<?php echo e($product->name); ?>"><br><br>
    <input type="text" name="price" value="<?php echo e($product->price); ?>"><br><br>


    <select name="category_id">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value= "<?php echo e($category->id); ?>"
                 <?php echo e($product->category_id == $category->id ? 'selected' : ''); ?>>
                 <?php echo e($category->cat_name); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </select><br><br>

    <button type="submit">Update</button>
</form><?php /**PATH C:\Projects\ipt-practice\resources\views/products/edit.blade.php ENDPATH**/ ?>