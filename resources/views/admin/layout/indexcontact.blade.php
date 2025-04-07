@extends('dashboard')

@section('content')
    <div class="main-panel">
        <div class="InputContainer"  style="margin-top: 70px">
            <input placeholder="Search" id="input" class="input" name="text" type="text" />
            <button id="searchButton" class="searchButton">Search</button>
        </div>   
        <div class=" grid-margin stretch-card" style="margin-top: 30px">
           
           
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Contacts Table</h4>
                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->subject }}</td>
                                        <td>{{ $contact->message }}</td>
                                        <td>
                                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="confirmDelete({{ $contact->id }})">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        {{ $contacts->links('pagination::bootstrap-4') }}
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
            const tableRows = document.querySelectorAll('.table tbody tr');
    
            function filterTable() {
                const searchQuery = input.value.toLowerCase();
    
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
