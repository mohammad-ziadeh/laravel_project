@extends('home.layout.userside')

@section('content')

    <div class="py-12" style="background-image: url(images/sharkk.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="max-w-xl" >
            @include('profile.partials.update-profile-information-form')

        </div>

        <div class="max-w-xl">
            @include('profile.partials.update-password-form')
        </div>


        <div class="max-w-xl">
            @include('profile.partials.delete-user-form')

        </div>

    </div>

   
    @endsection
