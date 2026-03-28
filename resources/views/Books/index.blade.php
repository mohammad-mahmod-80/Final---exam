
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض الكتب</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f5f7fa;
            direction: rtl;
        }

        .container {
            width: 80%;
            margin: 50px auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px #ddd;
            border-radius: 10px;
            overflow: hidden;
        }

        th {
            background-color: #4a90e2;
            color: white;
            padding: 10px;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            text-decoration: none;
            padding: 5px 10px;
            background-color: #27ae60;
            color: white;
            border-radius: 5px;
            margin-right: 5px;
        }

        a:hover {
            background-color: #1e8449;
        }

        button {
            padding: 5px 10px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c0392b;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>قائمة الكتب</h2>

    <table>
        <tr>
            <th>Book title</th>
            <th>Author</th>
            <th>Operations</th>
        </tr>

        @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>
                <a href="{{ route('books.edit', $book->id) }}">تعديل</a>

                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">حذف</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
</div>

</body>
</html>