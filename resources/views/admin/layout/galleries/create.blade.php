<h1 style="text-align: center; font-family: Arial, sans-serif; margin-bottom: 20px;">Add New Image</h1>

@if (session('success'))
    <p style="color: green; text-align: center;">{{ session('success') }}</p>
@endif

@if ($errors->any())
    <div style="color: red; text-align: center; margin-bottom: 15px;">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data"
    style="max-width: 500px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;">
    @csrf

    <input type="file" name="image" accept="image/*"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <button type="submit"
        style="width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">
        Upload Image
    </button>
</form>
