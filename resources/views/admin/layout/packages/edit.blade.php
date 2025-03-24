<h1 style="text-align: center; font-family: Arial, sans-serif; margin-bottom: 20px;">Edit Package</h1>

<form action="{{ route('packages.update', $ourtripcrud->id) }}" method="post"
    style="max-width: 500px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="text" name="title" placeholder="Title" value="{{ $ourtripcrud->title }}"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <input type="text" name="duration" placeholder="Duration" value="{{ $ourtripcrud->duration }}"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <input type="text" name="availability" placeholder="Availability" value="{{ $ourtripcrud->availability }}"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <input type="text" name="location" placeholder="Location" value="{{ $ourtripcrud->location }}"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <textarea name="description" placeholder="Description" rows="4"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">{{ $ourtripcrud->description }}</textarea>

    <input type="number" name="reviews_count" placeholder="Reviews Count" value="{{ $ourtripcrud->reviews_count }}"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <input type="number" name="price" placeholder="Price" value="{{ $ourtripcrud->price }}"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <label for="image" style="margin-bottom: 5px;">Update Image</label>
    <input type="file" name="image" id="image"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
    @if($ourtripcrud->image)
        <div>
            <p>Current Image:</p>
            <img src="{{ asset('storage/' . $ourtripcrud->image) }}" alt="Current Image" style="width: 100px; height: 100px;">
        </div>
    @endif

    <input type="submit" value="Update Package"
        style="width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">
</form>
