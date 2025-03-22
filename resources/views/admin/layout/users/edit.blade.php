<h1 style="text-align: center; font-family: Arial, sans-serif; margin-bottom: 20px;">Edit Place</h1>

<form action="{{ route('users.update', $users->id) }}" method="post" style="max-width: 500px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;">
    @csrf
    @method('PUT')

    <input type="text" name="name" placeholder="Name" value="{{ $users->name }}" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
    <input type="text" name="email" placeholder="Email" value="{{ $users->email }}" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
    {{-- <input type="text" name="password" placeholder="Password" value="{{ $users->password }}" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;"> --}}
    
    <select name="role" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
        <option value="admin" {{ $users->role == 'admin' ? 'selected' : '' }}>Admin</option>
        <option value="user" {{ $users->role == 'user' ? 'selected' : '' }}>User</option>
    </select>

    <input type="submit" value="Update" style="width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">
</form>
