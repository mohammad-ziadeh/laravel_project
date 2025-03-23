<h1 style="text-align: center; font-family: Arial, sans-serif; margin-bottom: 20px;">Add New User</h1>

@if (session('success'))
    <p style="color: green; text-align: center;">{{ session('success') }}</p>
@endif

@if ($errors->any())
    <div style="color: red; text-align: center; margin-bottom: 15px;">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form action="{{ route('users.store') }}" method="POST"
    style="max-width: 500px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;">
    @csrf

    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <input type="text" name="email" placeholder="Email" value="{{ old('email') }}"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <input type="password" name="password" placeholder="Password"
        style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
    @if (auth()->user()->role === 'super_admin')
        <select name="role"
            style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
            <option value="user">User</option>
            <option value="admin">Admin</option>
            <option value="super_admin">Super Admin</option>
        </select>
    @else
        <select name="role"
            style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;"
            >
            <option value="user">User</option>
            
        </select>
    @endif
    <button type="submit"
        style="width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">
        Submit
    </button>
</form>
