

<?php $__env->startSection('title', 'My Site | Category Lists'); ?>

<?php $__env->startSection("content"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Categories</title>
</head>
<body>
    <div class="max-w-4xl mx-auto py-20">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">Categories</h2>
                <p class="text-gray-500 mt-1">Manage and organize your product classifications.</p>
            </div>
            <div>
<a href="<?php echo e(route('categories.create')); ?>" class="inline-flex items-center justify-center px-5 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-lg shadow-sm transition-all active:scale-95">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Add Category
            </a>
            <a 
                    href="<?php echo e(route('products.index')); ?>"
                    class="block w-full text-center mt-3 text-md text-gray-500 hover:text-gray-700 font-bold transition-colors border border-gray-200 p-2 rounded-lg"
                >
                    Back
                </a>
</div>
        </div>

        <!-- Categories Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5 hover:shadow-md transition-shadow flex items-center justify-between group">
                    <div class="flex items-center space-x-4">
                        <!-- Dynamic Color Swatch -->
                        <div 
                            class="w-10 h-10 rounded-full border border-gray-100 shadow-inner flex-shrink-0"
                            style="background-color: <?php echo e($category->cat_color); ?>;"
                        ></div>
                        
                        <div>
                            <h3 class="font-bold text-gray-800 group-hover:text-emerald-600 transition-colors">
                                <?php echo e($category->cat_name); ?>

                            </h3>
                            <code class="text-xs text-gray-400 font-mono uppercase">
                                <?php echo e($category->cat_color); ?>

                            </code>
                        </div>
                    </div>

                    <!-- Simple Action Icon (Optional) -->
                    <div class="text-gray-300 group-hover:text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!-- Empty State (Optional) -->
            <?php if($categories->isEmpty()): ?>
                <div class="col-span-full py-12 text-center bg-gray-100 rounded-xl border-2 border-dashed border-gray-300">
                    <p class="text-gray-500">No categories found. Start by adding one!</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ipt-activity2\resources\views/categories/index.blade.php ENDPATH**/ ?>