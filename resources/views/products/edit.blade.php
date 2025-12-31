<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Tahoma, Arial, sans-serif;
            background: linear-gradient(135deg, #eef2f7, #d9e4f5);
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 100%;
            max-width: 480px;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            color: #555;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 14px;
            margin-bottom: 18px;
            transition: border-color 0.3s;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #28a745;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        button {
            width: 100%;
            padding: 14px;
            background: #28a745;
            border: none;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #1e7e34;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 18px;
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
        }

        .back:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Edit Product #{{ $id }}</h1>

        <form>
            <label>Product Name</label>
            <input type="text" name="name" value="{{ $product['name'] ?? '' }}">

            <label>Product Details</label>
            <textarea name="details">{{ $product['details'] ?? '' }}</textarea>

            <label>Product Price</label>
            <input type="number" name="price" value="{{ $product['price'] ?? '' }}">

            <button type="submit">Update (Not Saved)</button>
        </form>

        <a class="back" href="/">← Back to Home</a>
    </div>

</body>

</html>
