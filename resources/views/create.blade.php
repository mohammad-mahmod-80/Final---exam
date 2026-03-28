
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>إضافة كتاب</title>

    <style>
        body {
            background-color: #ffffff;
            direction: rtl;
        }

        .container {
            width: 400px;
            margin: 80px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>إضافة كتاب</h2>

    <form action="/books" method="POST">
        @csrf

        <label> Book title:</label>
        <input type="text" name="title">

        <label>Author:</label>
        <input type="text" name="author">

        <label>year_published :</label>
        <input type="number" name="year_published">

        <button type="submit">حفظ الكتاب</button>
    </form>
</div>

</body>
</html>