<!DOCTYPE html>
<html>
<head>
    <title>REGISTRATION PAGE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFFAFA;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #F08080;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .back-button:hover {
            background-color: #388e3c;
        }

        .registration-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 350px;
        }

        h1 {
            color: #eea29a;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #F08080;
            color: Black;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            text-align: center;
            cursor: pointer;
            
        }

        input[type="submit"]:hover {
            background-color: #388e3c;
        }
    </style>
</head>
<body>
    <a href="{{ route('app') }}" class="back-button">BACK</a>
    <div class="registration-container">
        <h1>CREATE ACCOUNT</h1>
        
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        <form action="{{ route('registration') }}" method="POST">
            <label for="first_name">FIRST NAME</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="last_name">LAST NAME</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="email">EMAIL</label>
            <input type="email" id="email" name="email" required>

            <label for="username">PHONE NUMBER</label>
            <input type="text" id="phonenumber" name="phonenumber" required>

            <label for="username">USERNAME</label>
            <input type="text" id="username" name="username" required>

            <label for="password">PASSWORD</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="REGISTER">
        </form>
    </div>
</body>
</html>