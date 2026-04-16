<h1>Customers</h1>

<a href="/customers/create">Add Customer</a>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Birthdate</th>
        <th>Actions</th>
    </tr>

    @foreach ($customers as $c)
    <tr>
        <td>{{ $c->name }}</td>
        <td>{{ $c->address }}</td>
        <td>{{ $c->gender }}</td>
        <td>{{ $c->birthdate }}</td>
        <td>
            <a href="/customers/{{ $c->id }}/edit">Edit</a>

            <form action="/customers/{{ $c->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>