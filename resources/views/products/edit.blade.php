<h2>Edit Product</h2>

<form action ="{{ route ('products.update',$product->id) }}" method ="POST">
    @csrf 
    @method('PUT')

    <input type="text" name="name" value="{{ $product->name }}"><br><br>
    <input type="text" name="price" value="{{ $product->price }}"><br><br>


    <select name="category_id">
        @foreach($categories as $category)
            <option value= "{{ $category->id }}"
                 {{ $product->category_id == $category->id ? 'selected' : ''}}>
                 {{ $category->cat_name }}
            </option>
        @endforeach 
    </select><br><br>

    <button type="submit">Update</button>
</form>