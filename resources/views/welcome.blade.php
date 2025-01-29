<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(45deg, #1a1a1a, #e3342f);
            color: white;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }

        header {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        header button {
            margin-left: 10px;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        header button:hover {
            background-color: #0056b3;
        }

        h1 {
            font-size: 48px;
            color: white;
            margin: 20px 0;
            text-align: center;
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
        }

        .image-container img {
            max-width: 100%;
            max-height: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }

        footer {
            position: absolute;
            bottom: 10px;
            right: 10px;
            color: white;
            font-size: 14px;
        }
    </style>
</head>
<body>
<header>
    <a href="/books" style="text-decoration: none;"><button>Books</button></a>
    <a href="/knifes" style="text-decoration: none;"><button>Cuchillos</button></a>

</header>

<h1>Projecte Laravel</h1>

<div class="image-container">
    <img src="https://proximahost.es/blog/wp-content/uploads/2022/05/Laravel.jpg" alt="Laravel Logo">
</div>

<footer>Fet per Marc Bertomeu</footer>
</body>
</html>

