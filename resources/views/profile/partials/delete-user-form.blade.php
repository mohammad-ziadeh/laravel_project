<section class="container py-5">
    <header class="text-center mb-4">
        <h2 class="text-lg font-medium text-white">
            {{ __('Delete Account') }}
        </h2>
        <p class="mt-1 text-sm text-white">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <!-- Delete Account Button -->
    <div class="text-center">
        <button 
            id="openDeleteModal"
            class="btn btn-danger px-4 py-2 rounded-md">
            {{ __('Delete Account') }}
        </button>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="modal fade" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">{{ __('Are you sure you want to delete your account?') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}</p>

                    <form method="post" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('delete')

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input 
                                id="password" 
                                name="password" 
                                type="password" 
                                class="form-control" 
                                placeholder="{{ __('Password') }}" 
                                required>
                            
                            @error('password')
                                <p class="text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                    <button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
                </div>
                    </form>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript for Modal -->
<script>
    document.getElementById('openDeleteModal').addEventListener('click', function () {
        var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        deleteModal.show();
    });
</script>
