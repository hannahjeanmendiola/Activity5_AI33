<!DOCTYPE html>
<html>
<head>
    <title>DASHBOARD</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
        }
        .widget {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            width: 30%;
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
    <a href="{{ route('app') }}" class="back-button">Back</a>
    
</body>
</html>