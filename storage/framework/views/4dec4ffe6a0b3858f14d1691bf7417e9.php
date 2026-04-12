


<?php $__env->startSection('title', 'My Site | Edit Product'); ?>

<?php $__env->startSection("content"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Product Management</title>
</head>
<body>
    <!-- EDIT PRODUCT FORM -->
    <div class="max-w-md w-full bg-white rounded-xl shadow-lg border border-gray-100 p-8 container mx-auto mt-20">
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-800">Edit Product</h2>
            <p class="text-gray-500 text-sm mt-1">Update the details for <strong><?php echo e($product->name); ?></strong>.</p>
        </div>

        <form action="<?php echo e(route('products.update', $product->id)); ?>" method="POST" class="space-y-5">
            <!-- CSRF & Method Spofing (Laravel) -->
            <?php echo csrf_field(); ?> 
            <?php echo method_field('PUT'); ?>

            <!-- Product Name -->
            <div>
                <label for="edit_name" class="block text-sm font-semibold text-gray-700 mb-1">Product Name</label>
                <input 
                    type="text" 
                    name="name" 
                    id="edit_name"
                    value="<?php echo e($product->name); ?>"
                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                >
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm py-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Price -->
            <div>
                <label for="edit_price" class="block text-sm font-semibold text-gray-700 mb-1">Price ($)</label>
                <div class="relative">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500">$</span>
                    <input 
                        type="text" 
                        name="price" 
                        id="edit_price"
                        value="<?php echo e($product->price); ?>"
                        class="w-full pl-8 pr-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                    >
                    <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm py-2"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <!-- Category -->
            <div>
                <label for="edit_category_id" class="block text-sm font-semibold text-gray-700 mb-1">Category</label>
                <div class="relative">
                    <select 
                        name="category_id" 
                        id="edit_category_id"
                        class="w-full px-4 py-2.5 rounded-lg border border-gray-300 bg-white focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all appearance-none cursor-pointer"
                    >
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>" <?php echo e($product->category_id == $category->id ? 'selected' : ''); ?>>
                                <?php echo e($category->cat_name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </select>
                     <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm py-2"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="pt-4 flex items-center gap-3">
                <button 
                    type="submit" 
                    class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-lg transition-colors shadow-md shadow-indigo-200 active:transform active:scale-[0.98]"
                >
                    Update Product
                </button>
                <a 
                    href="<?php echo e(route('products.index')); ?>"
                    class="px-4 py-3 bg-gray-100 hover:bg-gray-200 text-gray-600 font-semibold rounded-lg transition-colors text-center"
                >
                    Cancel
                </a>
            </div>
        </form>
    </div>

</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ipt-activity2\resources\views/products/edit.blade.php ENDPATH**/ ?>