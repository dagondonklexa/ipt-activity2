

<?php $__env->startSection('title', 'Product List'); ?>

<?php $__env->startSection('content'); ?>
<h2>Products</h2>

<a href="<?php echo e(route('products.create')); ?>" >Add Product</a>

<table border="1" cellpading="10">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Action</th>
    </tr>

    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($product->name); ?></td>
        <td><?php echo e($product->price); ?></td>
        <td><?php echo e($product->category->cat_name); ?></td>
        <td>
            <a href="<?php echo e(route('products.edit', $product->id)); ?>">Edit</a>

            <form action="<?php echo e(route('products.destroy', $product->id)); ?>"
                  method="POST" style="display:inline">
                <?php echo csrf_field(); ?> 
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Projects\ipt-practice\resources\views/products/index.blade.php ENDPATH**/ ?>