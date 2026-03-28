<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تحديث كتاب</title>

    <style>
        body {
            font-family: Arial;
            background-color: #eef2f7;
            direction: rtl;
        }

        .container {
            width: 400px;
            margin: 80px auto;
            background-color: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            margin-bottom: 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        input:focus {
            border-color: #4a90e2;
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4a90e2;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
        }

        button:hover {
            background-color: #357abd;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>تحديث بيانات الكتاب</h2>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Book title :</label>
        <input type="text" name="title" value="{{ $book->title }}">

        <label>Author:</label>
        <input type="text" name="author" value="{{ $book->author }}">

        <label>year_published :</label>
        <input type="number" name="year_published" value="{{ $book->year_published }}">

        <button type="submit">تحديث البيانات</button>
    </form>
</div>

</body>
</html>