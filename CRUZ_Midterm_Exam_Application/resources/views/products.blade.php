<!DOCTYPE html>
<html>
<head>
    <title>Book Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 60%;
            background: white;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #2c3e50;
            color: white;
        }
    </style>
</head>
<body>

    <h1>📚 Book Collection</h1>

    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Price (₱)</th>
        </tr>

        @foreach($products as $product)
        <tr>
            <td>{{ $product['title'] }}</td>
            <td>{{ $product['author'] }}</td>
            <td>{{ $product['price'] }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>