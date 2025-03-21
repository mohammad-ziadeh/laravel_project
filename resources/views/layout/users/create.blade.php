<h1> Add New Places </h1>

<form action="{{route('users.store')}}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" ><br><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><br><br>

    <label for="password">Password</label>
    <input type="text" id="password" name="password"><br><br>

    <label for="role">Role</label>
    <input type="text" id="role" name="role"><br><br>

    <button type="submit">Submit</button>

</form>