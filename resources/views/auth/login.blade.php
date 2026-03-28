<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>

    <style>
        body {
            font-family: Arial;
            background-color: #eef1f5;
            direction: rtl;
        }

        .container {
            width: 350px;
            margin: 100px auto;
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
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
        }

        input:focus {
            border-color: #4a90e2;
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
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

        .error {
            margin-top: 10px;
            color: #e74c3c;
            background-color: #fdecea;
            padding: 8px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>تسجيل الدخول</h2>

    <form action="/login" method="POST">
        @csrf

        <label>البريد الإلكتروني:</label>
        <input type="email" name="email" required>

        <label>كلمة المرور:</label>
        <input type="password" name="password" required>

        <button type="submit">دخول</button>
    </form>

    @if($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif
</div>

</body>
</html>