@extends('dashboard')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Update Profile Information Form -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                            <input id="name" name="name" type="text" value="{{ old('name', Auth::user()->name) }}" class="mt-1 p-2 border rounded-md w-full" required autofocus />
                            @error('name')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mt-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                            <input id="email" name="email" type="email" value="{{ old('email', Auth::user()->email) }}" class="mt-1 p-2 border rounded-md w-full" required />
                            @error('email')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">{{ __('Save') }}</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Update Password Form -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form method="POST" action="{{ route('profile.password.update') }}">
                        @csrf
                        @method('PUT')

                        <!-- Current Password -->
                        <div>
                            <label for="current_password" class="block text-sm font-medium text-gray-700">{{ __('Current Password') }}</label>
                            <input id="current_password" name="current_password" type="password" class="mt-1 p-2 border rounded-md w-full" required />
                            @error('current_password')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- New Password -->
                        <div class="mt-4">
                            <label for="password" class="block text-sm font-medium text-gray-700">{{ __('New Password') }}</label>
                            <input id="password" name="password" type="password" class="mt-1 p-2 border rounded-md w-full" required />
                            @error('password')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Confirm New Password -->
                        <div class="mt-4">
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">{{ __('Confirm New Password') }}</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 p-2 border rounded-md w-full" required />
                            @error('password_confirmation')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">{{ __('Save') }}</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Delete User Form -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form method="POST" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('DELETE')

                        <div>
                            <label for="delete_account" class="block text-sm font-medium text-gray-700">{{ __('Are you sure you want to delete your account?') }}</label>
                            @error('delete_account')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md">{{ __('Delete Account') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
