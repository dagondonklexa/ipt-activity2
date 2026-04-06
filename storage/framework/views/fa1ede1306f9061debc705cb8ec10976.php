<h2>Add Category</h2>

<form method="POST" action="<?php echo e(route('categories.store')); ?>">
    <?php echo csrf_field(); ?> 

    <input type="test" name="cat_name" placeholder="Category Name"><br><br>
    <input type="test" name="cat_color" placeholder="Category Color"><br><br>

    <button type="submit">Save</button>
</form><?php /**PATH C:\Projects\ipt-practice\resources\views/categories/create.blade.php ENDPATH**/ ?>