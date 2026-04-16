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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            margin-bottom: 20px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            background: #198754;
            color: white;
            cursor: pointer;
        }

        .back {
            text-decoration: none;
            margin-left: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Customer</h1>

        <form action="/customers/{{ $customer->id }}" method="POST">
            @csrf
            @method('PUT')

            <label>Name</label>
            <input type="text" name="name" value="{{ $customer->name }}">

            <label>Address</label>
            <input type="text" name="address" value="{{ $customer->address }}">

            <label>Gender</label>
            <select name="gender">
                <option value="Male" {{ $customer->gender == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ $customer->gender == 'Female' ? 'selected' : '' }}>Female</option>
            </select>

            <label>Birthdate</label>
            <input type="date" name="birthdate" value="{{ $customer->birthdate }}">

            <button type="submit" class="btn">Update</button>
            <a href="/customers" class="back">Cancel</a>
        </form>
    </div>
</body>
</html>