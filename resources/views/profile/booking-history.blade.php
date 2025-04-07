@extends('home.layout.userside')

@section('content')
    <div class="py-12"
        style="background-image: url(images/sharkk.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">

        <section class="container py-5">
            <header class="text-center mb-4" style="margin-top: 130px;">
                <h2 class="text-lg font-medium" style="color: white;">
                    {{ __('Booking History') }}
                </h2>
                <p class="mt-1 text-sm" style="color: white;">
                    {{ __('View your past bookings.') }}
                </p>
            </header>

            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10">
                    <div class="card shadow-lg rounded-lg bg-white p-4">
                        @if ($BookingHistories->isEmpty())
                            <p class="text-center">{{ __('No bookings found.') }}</p>
                        @else
                            <ul class="list-group">
                                @foreach ($BookingHistories as $booking)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>ID:{{ $booking->id }}</span>
                                        <span>{{ $booking->date }}</span>
                                        <span>{{ $booking->time }}</span>
                                        @if ($booking->numberofpeople > 1)
                                        <span>Price per Person: {{ $booking->price / $booking->numberofpeople }} JOD</span>
                                        @else
                                        <span>Price per Person: {{ $booking->price }} JOD</span>
                                        @endif    
                                        <span>Total Price: {{ $booking->price }} JOD</span>
                                        <span class="badge bg-primary rounded-pill">{{ $booking->state }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            <!-- Pagination -->
                            <div class="mt-4 d-flex justify-content-center">
                                {{ $BookingHistories->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
