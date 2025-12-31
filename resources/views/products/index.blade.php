<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Products List</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Tahoma, Arial, sans-serif;
            background: linear-gradient(135deg, #eef2f7, #d9e4f5);
            min-height: 100vh;
            margin: 0;
            padding: 40px;
        }

        .page {
            max-width: 900px;
            margin: auto;
        }

        h1 {
            margin-bottom: 25px;
            color: #333;
        }

        .actions {
            margin-bottom: 20px;
            text-align: right;
        }

        .add-btn {
            background: #007bff;
            color: #fff;
            padding: 12px 18px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s;
        }

        .add-btn:hover {
            background: #0056b3;
        }

        table {
            width: 100%;
            background: #fff;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 14px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        th {
            background: #007bff;
            color: #fff;
            font-weight: 600;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover {
            background: #f8f9fb;
        }

        .edit-btn {
            background: #28a745;
            color: #fff;
            padding: 6px 14px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            transition: background 0.3s;
        }

        .edit-btn:hover {
            background: #1e7e34;
        }
    </style>
</head>

<body>

    <div class="page">
        <h1>Products List</h1>

        <div class="actions">
            <a class="add-btn" href="/products/create">+ Add New Product</a>
        </div>

        <table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>

            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>${{ $product['price'] }}</td>
                    <td>
                        <a class="edit-btn" href="/products/{{ $product['id'] }}/edit">
                            Edit
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

</body>

</html>
