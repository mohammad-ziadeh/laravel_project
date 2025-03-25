@extends("home.layout.userside")

@section("content")

<style>
    body {
        background-image: url("{{ asset('images/underwater-portrait-scuba-diver-exploring-sea-world.jpg') }}");
        background-size: cover;
        background-color: rgb(37, 150, 190);
        background-repeat: no-repeat;
        background-position: center;
        width: 100%;
        align-items: center;
        justify-content: center;
    }
</style>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow-lg p-4" style="max-width: 800px; width: 100%; border-radius: 12px;margin-top: 150px; margin-bottom: 150px;">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">Edit Trip</h3>
            <form action="{{ route('tripcruds.update', $ourtripcruds->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{$ourtripcruds->title}}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="duration" class="form-label">Duration</label>
                        <input type="number" class="form-control" name="duration" id="duration" value="{{$ourtripcruds->duration}}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="availability" class="form-label">Availability</label>
                        <input type="text" class="form-control" name="availability" id="availability" value="{{$ourtripcruds->availability}}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" name="location" id="location" value="{{$ourtripcruds->location}}" required>
                    </div>

                  
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" required>{{$ourtripcruds->description}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" step="0.01" class="form-control" name="price" id="price" value="{{$ourtripcruds->price}}" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
