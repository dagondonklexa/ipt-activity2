<h2>Add Category</h2>

<form method="POST" action="{{ route('categories.store')}}">
    @csrf 

    <input type="test" name="cat_name" placeholder="Category Name"><br><br>
    <input type="test" name="cat_color" placeholder="Category Color"><br><br>

    <button type="submit">Save</button>
</form>