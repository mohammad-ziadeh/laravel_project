<section class="container py-5">
    <header class="text-center mb-4">
        <h2 class="text-lg font-medium text-white">
            {{ __('Update Password') }}
        </h2>
        <p class="mt-1 text-sm text-white">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-4 p-4 shadow-lg rounded-lg bg-white" style="opacity: 0.9; border-radius: 5px;">
                @csrf
                @method('put')

                <!-- Current Password -->
                <div class="mb-3">
                    <label for="update_password_current_password" class="form-label">
                        {{ __('Current Password') }}
                    </label>
                    <input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" required>
                    @error('current_password')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- New Password -->
                <div class="mb-3">
                    <label for="update_password_password" class="form-label">
                        {{ __('New Password') }}
                    </label>
                    <input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password" required>
                    @error('password')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="update_password_password_confirmation" class="form-label">
                        {{ __('Confirm Password') }}
                    </label>
                    <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" required>
                    @error('password_confirmation')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Save Button -->
                <div class="d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('Save') }}
                    </button>
                </div>

                @if (session('status') === 'password-updated')
                    <p class="text-sm text-success mt-2 text-center">
                        {{ __('Saved.') }}
                    </p>
                @endif
            </form>
        </div>
    </div>
</section>
