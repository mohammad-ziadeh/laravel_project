@extends('dashboard')

@section('content')


      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Advanced Table</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="display expandable-table"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Number of Peopl</th>
                                                <th>Additional Requests</th>
                                                <th>Date</th>
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
                                                    <td>{{$Booking->message}}</td>
                                                    <td>{{ $Booking->date}}</td>
                                                    <td>{{ $Booking->time}}</td>
            
                                            
                                                    <td>
                                                      <form id="delete-form-{{ $Booking->id }}" action="{{ route('booknows.destroy', $Booking->id) }}" method="POST" style="display:inline;">
                                                          @csrf
                                                          @method('DELETE')
                                                          <button type="button" onclick="confirmDelete({{ $Booking->id }})">Delete</button>
                                                      </form>
                                                  </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
          
            </div>
          </div>
        </div>
      </div>

@endsection
