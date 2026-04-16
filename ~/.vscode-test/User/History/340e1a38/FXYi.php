<h1>Edit Customer</h1>

<form action="/customers/{{ $customer->id }}" method="POST">
    @csrf
    @method('PUT')

    Name: <input type="text" name="name" value="{{ $customer->name }}"><br>
    Address: <input type="text" name="address" value="{{ $customer->address }}"><br>
    Gender: <input type="text" name="gender" value="{{ $customer->gender }}"><br>
    Birthdate: <input type="date" name="birthdate" value="{{ $customer->birthdate }}"><br>

    <button type="submit">Update</button>
</form>