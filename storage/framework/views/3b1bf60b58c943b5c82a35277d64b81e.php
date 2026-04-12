

<?php $__env->startSection('title', 'My Site | Product List'); ?>

<?php $__env->startSection('content'); ?>
<div class="container flex flex-col justify-center items-center pt-10 px-4 gap-6 max-w-6xl mx-auto">

    <!-- Header -->
    <h2 class="font-bold text-4xl text-gray-800 mt-20">Products</h2>

    <!-- Top Controls: Add Product -->
    <div class="w-full flex mb-4 gap-5">
        <div class="flex-1 flex">
            <a href="<?php echo e(route('products.create')); ?>"
            class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-full hover:bg-blue-600 transition">
                + Add Product
            </a>
        </div>
        <div class="flex-1 flex justify-end">
            <a href="<?php echo e(route('categories.index')); ?>"
            class="px-6 py-3 bg-emerald-600  text-white font-semibold rounded-full hover:bg-emerald-700 transition">
                + Category
            </a>
        </div>
        
        
    </div>

    <!-- Table Wrapper -->
    <div class="overflow-x-auto w-full rounded-lg border border-gray-300 shadow-sm">
        <table class="w-full table-auto border-collapse">
            
            <!-- Table Head -->
            <thead class="bg-gray-100 text-gray-700 uppercase text-sm">
                <tr>
                    <th class="px-6 py-3 text-left border-b border-gray-300">Name</th>
                    <th class="px-6 py-3 text-left border-b border-gray-300">Price</th>
                    <th class="px-6 py-3 text-left border-b border-gray-300">Category</th>
                    <th class="px-6 py-3 text-center border-b border-gray-300">Action</th>
                </tr>
            </thead>

            <!-- Table Body -->
            <tbody class="divide-y divide-gray-200">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-3 text-left"><?php echo e($product->name); ?></td>
                    <td class="px-6 py-3 text-left">₱ <?php echo e($product->price); ?></td>
                    <td class="px-6 py-3 text-left"><?php echo e($product->category?->cat_name ?? 'No Category'); ?></td>
                    <td class="px-6 py-3 text-center flex justify-center gap-2">
                        <!-- Edit Button (Green) -->
                        <a href="<?php echo e(route('products.edit', $product->id)); ?>"
                           class="px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600 transition">
                           Edit
                        </a>

                        <!-- Delete Button (Dark Red) -->
                        <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST" onsubmit="return confirm('Delete this item?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit"
                                    class="px-3 py-1 bg-red-800 text-white rounded hover:bg-red-900 transition">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\ipt-activity2\resources\views/products/index.blade.php ENDPATH**/ ?>