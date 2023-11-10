<!DOCTYPE html>
<html>
<head>
    <title>LOGIN PAGE</title>
    <style>
        body {
           
            background-color: #FFFAFA;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            color: #eea29a;
            text-align: center;
        }
        .login-container {
            max-width: 400px;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
        }
        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
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

    </style>
</head>
<body>
    <div class="login-container">
        <h1>LOGIN</h1>
        <a href="{{ route('app') }}" class="back-button">GO TO NAVIGATION PAGE</a>

        <form action="{{ route('login.store') }}" method="POST">
            @csrf
            <label for="username">USERNMAE</label>
            <input type="text" id="username" name="username" required>
            <br>

            <label for="password">PASSWORD</label>
            <input type="password" id="password" name="password" required>
            <br>
            
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
             <br>
            <input type="submit" value="LOGIN">

      
        
        </form>
    </div>
</body>
</html>