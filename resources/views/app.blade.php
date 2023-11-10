<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TIME FOR YOUR APP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid  #eea29a;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }

        .box h1 {
            color: #eea29a;
            font-size: 24px;
        }

        .button {
            background-color: #eea29a;
            color: black;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
        }
        
    </style>
</head>
<body>
    <div class="box">
        <h1>NAVIGATION PAGE</h1>
        <button class="button"><a href="{{ route('dashboard') }}" style="text-decoration: none; color: black;">DASHBOARD</a></button>
        <button class="button"><a href="{{ route('login') }}" style="text-decoration: none; color: black;">LOGIN</a></button>
        <button class="button"><a href="{{ route('registration') }}" style="text-decoration: none; color: black;">REGISTRATION</a></button>
    </div>
</body>
</html>