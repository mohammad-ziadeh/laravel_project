<section class="container py-5" >
    <header class="text-center mb-4" style=" margin-top: 130px;">
        <h2 class="text-lg font-medium " style="color: white">
            {{ __('Profile Information') }}
        </h2>
        <p class="mt-1 text-sm " style="color: white">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-4 p-4 shadow-lg rounded-lg bg-white" style="opacity: 0.9; border-radius: 5px;">
                @csrf
                @method('patch')

                <!-- Name Input -->
                <div class="mb-3">
                    <label for="name" class="form-label">
                        {{ __('Name') }}
                    </label>
                    <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                    @error('name')
                        <p class="text-danger mt-2" style="color: white">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Input -->
                <div class="mb-3">
                    <label for="email" class="form-label">
                        {{ __('Email') }}
                    </label>
                    <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required autocomplete="username">
                    @error('email')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div class="mt-3">
                            <p class="text-sm text-gray-800">
                                {{ __('Your email address is unverified.') }}
                                <button form="send-verification" class="btn btn-link">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-success">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>

                <!-- Save Button -->
                <div class="d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('Save') }}
                    </button>
                </div>

                @if (session('status') === 'profile-updated')
                    <p class="text-sm text-success mt-2 text-center">
                        {{ __('Saved.') }}
                    </p>
                @endif
            </form>
        </div>
    </div>
</section>
