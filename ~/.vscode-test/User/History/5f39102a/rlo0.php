<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Customer</title>
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
            background: #0d6efd;
            color: white;
            cursor: pointer;
        }

        .back {
            text-decoration: none;
            margin-left: 10px;
            color: #333;
        }

        .nav {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav">
            <a href="/customers">← Back to Customers</a>
        </div>

        <h1>Add Customer</h1>

        <form action="/customers" method="POST">
            @csrf

            <label>Name</label>
            <input type="text" name="name" required>

            <label>Address</label>
            <input type="text" name="address" required>

            <label>Gender</label>
            <select name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <label>Birthdate</label>
            <input type="date" name="birthdate" required>

            <button type="submit" class="btn">Save</button>
            <a href="/customers" class="back">Cancel</a>
        </form>
    </div>
</body>
</html>