<h1 style="text-align: center; font-family: Arial, sans-serif; margin-bottom: 20px;">Add New Package</h1>

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

<form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data"
    style="max-width: 500px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;">
    @csrf

    <input type="text" name="title" placeholder="Title" value="{{ old('title') }}"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <input type="number" name="duration" placeholder="Duration" value="{{ old('duration') }}"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <input type="text" name="availability" placeholder="Availability" value="{{ old('availability') }}"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <input type="text" name="location" placeholder="Location" value="{{ old('location') }}"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <textarea name="description" placeholder="Description" rows="4"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">{{ old('description') }}</textarea>


    <input type="number" name="price" placeholder="Price" value="{{ old('price') }}"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <label for="image" style="margin-bottom: 5px;">Package Image</label>
    <input type="file" name="image" id="image"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <button type="submit"
        style="width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">
        Submit
    </button>
</form>
