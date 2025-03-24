@extends('home.layout.userside')
@section('content')
    <div class="zurf-page-title-wrap zurf-style-custom zurf-center-align">
        <div class="zurf-header-transparent-substitute"></div>
        <div class="zurf-page-title-overlay"></div>
        <div class="zurf-page-title-container zurf-container">
            <div class="zurf-page-title-content zurf-item-pdlr">
                <h1 class="zurf-page-title">Search Tours</h1>
            </div>
        </div>
    </div>
    <div class="zurf-page-wrapper" id="zurf-page-wrapper">
        <div class="tourmaster-template-wrapper tourmaster-search-style-2">
            <div class="tourmaster-container">
                <div class="tourmaster-sidebar-wrap clearfix tourmaster-sidebar-style-none">
                    <div class="tourmaster-sidebar-center tourmaster-column-60">
                        <div class="tourmaster-page-content">
                            <div class="InputContainer">
                                <input placeholder="Search" id="input" class="input" name="text" type="text" />
                                <button id="searchButton" class="searchButton">Search</button>
                            </div>
                            <div class="tourmaster-tour-search-content-wrap">
                                <div
                                    class="tourmaster-tour-item clearfix tourmaster-tour-item-style-grid tourmaster-tour-item-column-2">





                                    @if (auth()->user()->role === 'admin' || auth()->user()->role === 'super_admin')
                                        <form action="{{ route('tripcruds.store') }}" method="POST"
                                            enctype="multipart/form-data" class="trip-form" style="margin-bottom: 150px;">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="title" class="label-field">Title</label>
                                                    <input type="text" class="form-control input-field" name="title"
                                                        id="title" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="image" class="label-field">Image</label>
                                                    <input type="file" class="form-control input-field" name="image"
                                                        id="image">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="duration" class="label-field">Duration in days</label>
                                                    <input type="number" class="form-control input-field" name="duration"
                                                        id="duration" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="availability" class="label-field">Availability</label>
                                                    <input type="text" class="form-control input-field"
                                                        name="availability" id="availability" required>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="location" class="label-field">Location</label>
                                                    <input type="text" class="form-control input-field" name="location"
                                                        id="location" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="description" class="label-field">Description</label>
                                                    <textarea class="form-control input-field textarea-field" name="description" id="description"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="reviews_count" class="label-field">Reviews Count</label>
                                                    <input type="number" class="form-control input-field"
                                                        name="reviews_count" id="reviews_count" value="0" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="price" class="label-field">Price</label>
                                                    <input type="number" step="0.01" class="form-control input-field"
                                                        name="price" id="price" required>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                                        </form>
                                    @endif




                                    <div class="tourmaster-tour-item-holder gdlr-core-js-2 clearfix"
                                        style="display: flex; flex-wrap: wrap;" data-layout="fitrows">



                                        @foreach ($ourtripcruds as $ourtripcrud)
                                            <div
                                                class="gdlr-core-item-list tourmaster-item-pdlr tourmaster-column-30 tourmaster-column-first">
                                                <div
                                                    class="tourmaster-tour-grid tourmaster-tour-frame tourmaster-tour-grid-style-2 tourmaster-price-right-title">
                                                    <div class="tourmaster-tour-grid-inner"
                                                        style="box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09); -moz-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09); -webkit-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09); border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;">

                                                        <div
                                                            class="tourmaster-tour-thumbnail tourmaster-media-image gdlr-core-outer-frame-element">
                                                            <img src="{{ asset('storage/' . $ourtripcrud->image) }}"
                                                                alt="" width="700" height="500" />
                                                        </div>

                                                        <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js"
                                                            data-sync-height="tour-item-40">

                                                            @if (auth()->user()->role === 'admin' || auth()->user()->role === 'super_admin')
                                                                <div class="tourmaster-icons"
                                                                    style="position: absolute; top: 10px; right: 10px; z-index: 10;">
                                                                    <a style="text-decoration: none; margin-right: 15px;"
                                                                        href="{{ route('tripcruds.edit', $ourtripcrud->id) }}"
                                                                        class="tourmaster-edit-icon">
                                                                        <i class="fa fa-edit" style="color: #48bf84;"></i>
                                                                    </a>

                                                                    <form id="delete-form-{{ $ourtripcrud->id }}"
                                                                        action="{{ route('tripcruds.destroy', $ourtripcrud->id) }}"
                                                                        method="POST" style="display: inline;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="button"
                                                                            class="tourmaster-delete-icon"
                                                                            style="background: none; border: none; cursor: pointer; transition: transform 0.3s, background-color 0.3s;"
                                                                            onclick="confirmDelete({{ $ourtripcrud->id }})">
                                                                            <i class="fa fa-trash"
                                                                                style="color: #48bf84; "></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            @endif

                                                            <div class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element"
                                                                style="color: #ffffff; background-color: #48bf84;">
                                                                <div class="tourmaster-thumbnail-ribbon-cornor"
                                                                    style="border-right-color: rgba(72, 191, 132, 0.5);">
                                                                </div>
                                                                Very Popular!
                                                            </div>

                                                            <h3 class="tourmaster-tour-title gdlr-core-skin-title"
                                                                style="font-size: 21px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                    y="0px" viewbox="0 0 512 512" xml:space="preserve"
                                                                    style="fill: #48bf84;">
                                                                    <path
                                                                        d="M397.413,199.303c-2.944-4.576-8-7.296-13.408-7.296h-112v-176c0-7.552-5.28-14.08-12.672-15.648 c-7.52-1.6-14.88,2.272-17.952,9.152l-128,288c-2.208,4.928-1.728,10.688,1.216,15.2c2.944,4.544,8,7.296,13.408,7.296h112v176 c0,7.552,5.28,14.08,12.672,15.648c1.12,0.224,2.24,0.352,3.328,0.352c6.208,0,12-3.616,14.624-9.504l128-288 C400.805,209.543,400.389,203.847,397.413,199.303z">
                                                                    </path>
                                                                </svg>
                                                                <span>{{ $ourtripcrud->title }}</span>
                                                            </h3>

                                                            <div class="tourmaster-tour-price-wrap"
                                                                style="margin-top: 50px; margin-bottom: 25px;">
                                                                <span class="tourmaster-tour-price"
                                                                    style="font-size: 18px; font-weight: bold; color: #48bf84; display: block; margin-top: 50px !important;">
                                                                    <span class="tourmaster-head">From</span>
                                                                    <span
                                                                        class="tourmaster-tail">${{ $ourtripcrud->price }}</span>
                                                                </span>
                                                            </div>

                                                            <div class="tourmaster-tour-info-wrap clearfix">
                                                                <div
                                                                    class="tourmaster-tour-info tourmaster-tour-info-duration-text">
                                                                    <i class="fa-regular fa-clock"></i>
                                                                    {{ $ourtripcrud->duration }} days
                                                                </div>

                                                                <div
                                                                    class="tourmaster-tour-info tourmaster-tour-info-availability">
                                                                    <i class="fa fa-calendar"></i> Availability:
                                                                    {{ $ourtripcrud->availability }}
                                                                </div>
                                                                <div
                                                                    class="tourmaster-tour-info tourmaster-tour-info-departure-location">
                                                                    <i class="flaticon-takeoff-the-plane"></i>
                                                                    {{ $ourtripcrud->location }}
                                                                </div>
                                                            </div>

                                                            <div class="tourmaster-tour-description">
                                                                <i class="fa fa-file-text icon-description"
                                                                    style="margin-right: 10px;"></i>
                                                                {{ $ourtripcrud->description }}
                                                            </div>

                                                            <div class="tourmaster-tour-rating">
                                                                @for ($i = 0; $i < 5; $i++)
                                                                    <i
                                                                        class="fa fa-star{{ $i < $ourtripcrud->reviews_count ? '' : '-o' }}"></i>
                                                                @endfor
                                                                <span
                                                                    class="tourmaster-tour-rating-text">({{ $ourtripcrud->reviews_count }}
                                                                    Reviews)</span>
                                                            </div>

                                                            <div class="tourmaster-tour-booking"
                                                                style="text-align: center;">
                                                                <button class="tourmaster-button"
                                                                    onclick="openModal({{ $ourtripcrud->id }}, {{ $ourtripcrud->price }})"
                                                                    style="padding: 10px; background-color: #48bf84; color: white; border-radius:5px; border: #48bf84;">
                                                                    Book Now
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach



                                        <div id="bookingModal" class="modal">
                                            <div class="modal-content">
                                                <span class="close" onclick="closeModal()">&times;</span>
                                                <form action="{{ route('booknows.store') }}" method="POST">
                                                    @csrf
                                                    <h4>Booking Form</h4>
                                                    <input type="hidden" id="trip_id" name="trip_id">
                                                    <input type="text" name="name" placeholder="Your Name"
                                                        value="{{ Auth::user()->name }}" required
                                                        style="width: 100%; padding: 10px; margin-bottom: 10px;">
                                                    <input type="email" name="email" placeholder="Your Email"
                                                        value="{{ Auth::user()->email }}" required
                                                        style="width: 100%; padding: 10px; margin-bottom: 10px;">
                                                    <input type="number" name="numberofpeople"
                                                        placeholder="Number of People" required
                                                        style="width: 100%; padding: 10px; margin-bottom: 10px;">
                                                    <input type="date" name="date" required
                                                        style="width: 100%; padding: 10px; margin-bottom: 10px;">
                                                    <input type="time" name="time" required
                                                        style="width: 100%; padding: 10px; margin-bottom: 10px;">

                                                    <textarea name="message" placeholder="Additional Requests" style="width: 100%; padding: 10px; margin-bottom: 10px;"></textarea>
                                                    <p>The price is for each person</p>
                                                    <input type="number" name="price"
                                                        value="{{ $ourtripcrud->price }}" required readonly
                                                        style="width: 100%; padding: 10px; margin-bottom: 10px;"
                                                        placeholder="price">
                                                  
                                                   
                                                    <button type="submit" class="tourmaster-button"
                                                        style="padding: 10px; background-color: #48bf84; color: white; border-radius: 5px;">
                                                        Submit Booking
                                                    </button>
                                                </form>
                                            </div>
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
    <style>
        .trip-form {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .form-group {
            flex-basis: 48%;
            margin-right: 2%;
        }

        .form-group:last-child {
            margin-right: 0;
        }

        .label-field {
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
            font-size: 14px;
        }

        .input-field,
        .textarea-field {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            background-color: #fff;
            transition: border-color 0.3s;
        }

        .input-field:focus,
        .textarea-field:focus {
            border-color: #007bff;
            outline: none;
        }

        .textarea-field {
            resize: vertical;
            min-height: 150px;
        }

        .submit-btn {
            margin-top: 20px;
            padding: 12px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .submit-btn:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .submit-btn:focus {
            outline: none;
        }

        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
            }

            .form-group {
                margin-bottom: 15px;
                flex-basis: 100%;
            }
        }
    </style>


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
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('input');
            const items = document.querySelectorAll('.tourmaster-tour-grid');


            input.addEventListener('input', function() {
                const searchQuery = input.value.toLowerCase();

                items.forEach(function(item) {

                    const title = item.querySelector('.tourmaster-tour-title span').textContent
                        .toLowerCase();
                    const description = item.querySelector('.tourmaster-tour-description')
                        .textContent.toLowerCase();
                    const price = item.querySelector('.tourmaster-tour-price').textContent
                        .toLowerCase();
                    const location = item.querySelector('.tourmaster-tour-info-departure-location')
                        .textContent.toLowerCase();
                    const duration = item.querySelector('.tourmaster-tour-info-duration-text')
                        .textContent.toLowerCase();
                    const availability = item.querySelector('.tourmaster-tour-info-availability') ?
                        item.querySelector('.tourmaster-tour-info-availability').textContent
                        .toLowerCase() : '';


                    if (title.includes(searchQuery) || description.includes(searchQuery) || price
                        .includes(searchQuery) || location.includes(searchQuery) || duration
                        .includes(searchQuery)) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>
