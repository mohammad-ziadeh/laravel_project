@extends('dashboard')

@section('content')
    <div class="main-panel">
        <div class="InputContainer">
            <input placeholder="Search" id="input" class="input" name="text" type="text" />
            <button id="searchButton" class="searchButton">Search</button>
        </div>
        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ourtripcruds Table</h4>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Duration</th>
                                    <th>Availability</th>
                                    <th>Location</th>
                                    <th>Description</th>
                                    <th>Reviews Count</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ourtripcruds as $ourtripcrud)
                                    <tr>
                                        <td>{{ $ourtripcrud->id }}</td>
                                        <td>{{ $ourtripcrud->title }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $ourtripcrud->image) }}" alt="Image"
                                                style="width: 100px; height: 100px;">
                                        </td>
                                        <td>{{ $ourtripcrud->duration }}</td>
                                        <td>{{ $ourtripcrud->availability }}</td>
                                        <td>{{ $ourtripcrud->location }}</td>
                                        <td>{{ $ourtripcrud->description }}</td>
                                        <td>{{ $ourtripcrud->reviews_count }}</td>
                                        <td>{{ $ourtripcrud->price }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('packages.edit', $ourtripcrud->id) }}" class="btn">Edit</a>
                                            <form action="{{ route('packages.destroy', $ourtripcrud->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $ourtripcrud->id }})">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        {{ $ourtripcruds->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Your custom styles for the page */
        .InputContainer {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px;
        }

        .input {
            width: 250px;
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            outline: none;
            transition: all 0.3s ease;
        }

        .searchButton {
            padding: 10px 20px;
            background-color: #104581;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .searchButton:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.4);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('input');
            const searchButton = document.getElementById('searchButton');
            const tableRows = document.querySelectorAll('.table tbody tr');

            function filterTable() {
                const searchQuery = input.value.toLowerCase();

                tableRows.forEach(function(row) {
                    const rowText = row.textContent.toLowerCase();

                    if (rowText.includes(searchQuery)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            }

            input.addEventListener('input', filterTable);

            searchButton.addEventListener('click', filterTable);
        });
    </script>
@endsection
