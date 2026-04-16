<h1>Add Customer</h1>

<form action="/customers" method="POST">
    @csrf

    Name: <input type="text" name="name"><br>
    Address: <input type="text" name="address"><br>
    Gender: <input type="text" name="gender"><br>
    Birthdate: <input type="date" name="birthdate"><br>

    <button type="submit">Save</button>
</form>