@extends('dashboard')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="InputContainer">
                        <input placeholder="Search" id="input" class="input" name="text" type="text" />
                        <button id="searchButton" class="searchButton">Search</button>
                    </div>
                    <div class="card-body">
                        <p class="card-title">Reservation Table</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="display expandable-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Number of People</th>
                                                <th>Additional Requests</th>
                                                <th>Date</th>
                                                <th>cost</th>
                                                <th>state</th>
                                                <th>Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Bookings as $Booking)
                                            <tr>
                                                <td>{{ $Booking->id }}</td>
                                                <td>{{ $Booking->name }}</td>
                                                <td>{{ $Booking->email }}</td>
                                                <td>{{ $Booking->numberofpeople }}</td>
                                                <td>{{ $Booking->message }}</td>
                                                <td>{{ $Booking->date }}</td>
                                                <td>{{ $Booking->price }}</td>
                                                
                                                <td>
                                                    <form action="{{ route('booknows.update', $Booking->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <select name="state" class="form-control" onchange="this.form.submit()" style="width:100px; color: black;">
                                                            <option value="accepted" {{ $Booking->state == 'accepted' ? 'selected' : '' }}>Accepted</option>
                                                            <option value="denied" {{ $Booking->state == 'denied' ? 'selected' : '' }}>Denied</option>
                                                            <option value="pending" {{ $Booking->state == 'pending' ? 'selected' : '' }}>Pending</option>
                                                        </select>
                                                    </form>
                                                </td>

                                                <td>{{ $Booking->time }}</td>

                                                <td>
                                                    <form id="delete-form-{{ $Booking->id }}" action="{{ route('booknows.destroy', $Booking->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $Booking->id }})">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    {{ $Bookings->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
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
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('input');
        const searchButton = document.getElementById('searchButton');
        const tableRows = document.querySelectorAll('.expandable-table tbody tr');

        function filterTable() {
            const searchQuery = input.value.toLowerCase().trim();

            tableRows.forEach(function (row) {
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
