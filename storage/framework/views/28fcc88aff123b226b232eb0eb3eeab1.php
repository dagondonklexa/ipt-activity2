<footer class="bg-gray-900 text-gray-300 mt-10">
    <div class="max-w-6xl mx-auto px-6 py-10">

        <div class="flex flex-col md:flex-row justify-between items-center gap-6">

            <!-- Left -->
            <div class="text-center md:text-left">
                <h2 class="text-white text-lg font-semibold">
                    Product Management System
                </h2>
                <p class="text-sm text-gray-400 mt-1">
                    Manage products and categories easily
                </p>
            </div>

            <!-- Center Links -->
            <div class="flex gap-6 text-sm">
                <a href="<?php echo e(route('products.index')); ?>" class="hover:text-white transition">
                    Products
                </a>
                <a href="<?php echo e(route('categories.index')); ?>" class="hover:text-white transition">
                    Categories
                </a>
            </div>

            <!-- Right -->
            <div class="text-sm text-gray-400 text-center md:text-right">
                © <?php echo e(date('Y')); ?> All Rights Reserved
            </div>

        </div>

    </div>
</footer><?php /**PATH C:\Users\dagon\ipt-activity2\resources\views/partials/footer.blade.php ENDPATH**/ ?>