@extends('dashboard')


@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Welcome {{ Auth::user()->name }}</h3>
                        </div>
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h4 class="font-weight-bold">Today is {{ now()->format('l, F j, Y') }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12 grid-margin transparent">
                    <div class="row">
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-tale">
                                <div class="card-body">
                                    <p class="mb-4">Today’s Reservations</p>
                                    <p class="fs-30 mb-2">{{ $todayReservation }}</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-dark-blue">
                                <div class="card-body">
                                    <p class="mb-4">Total Reservations</p>
                                    <p class="fs-30 mb-2">{{ $totalReservation }}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                            <div class="card card-light-blue">
                                <div class="card-body">
                                    <p class="mb-4">Number of Admins</p>
                                    <p class="fs-30 mb-2">{{ $totalAdmin }}</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 stretch-card transparent">
                            <div class="card card-light-danger">
                                <div class="card-body">
                                    <p class="mb-4">Number of Clients</p>
                                    <p class="fs-30 mb-2">{{ $totalUser }}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card position-relative">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                    <div class="ml-xl-4 mt-3">
                                        <p class="card-title">Detailed Reports</p>
                                        <h1 class="text-primary">{{ $totalEarning }}$</h1>
                                        <p class="mb-2 mb-xl-0">The total earnings from reservations</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3 d-flex flex-column justify-content-start" style="margin-left: 200px">
                                    <div class="ml-xl-4 mt-3">
                                        <p class="card-title">new messages</p>
                                        <h1 class="text-primary">{{ $todayContacts }}</h1>
                                        <p class="mb-2 mb-xl-0">The total of today messages</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                    <div class="ml-xl-4 mt-3">
                                        <p class="card-title">This Month Earnings</p>
                                        <h1 class="text-primary">{{ $thisMonthEarnings }}$</h1>
                                        <p class="mb-2 mb-xl-0">This month total earnings from reservations</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3 d-flex flex-column justify-content-start" style="margin-left: 200px">
                                    <div class="ml-xl-4 mt-3">
                                        <p class="card-title">Packages</p>
                                        <h1 class="text-primary">{{ $totalOurtripcrud }}</h1>
                                        <p class="mb-2 mb-xl-0">The number of packages</p>
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
