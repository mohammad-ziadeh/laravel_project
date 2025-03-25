<h1 style="text-align: center; font-family: Arial, sans-serif; margin-bottom: 20px;">Edit Image</h1>

<form action="{{ route('galleries.update', $gallery->id) }}" method="post" enctype="multipart/form-data"
    style="max-width: 500px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;">
    @csrf
    @method('PUT')

    <div style="text-align: center; margin-bottom: 15px;">
        <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gallery Image" style="max-width: 100%; border-radius: 4px;">
    </div>

    <input type="file" name="image"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <input type="submit" value="Update"
        style="width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">
</form>
