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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            margin-bottom: 20px;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .btn {
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            color: white;
            background: #0d6efd;
            border: none;
            cursor: pointer;
        }

        .btn-edit {
            background: #198754;
        }

        .btn-delete {
            background: #dc3545;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        table th {
            background: #f1f1f1;
        }

        form {
            display: inline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="top-bar">
            <h1>Customer List</h1>
            <a href="/customers/create" class="btn">Add Customer</a>
        </div>

        <table>
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
                    <a href="/customers/{{ $c->id }}/edit" class="btn btn-edit">Edit</a>

                    <form action="/customers/{{ $c->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
</body>
</html>