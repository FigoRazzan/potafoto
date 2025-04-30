<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background-color: #c9d6ff;
            background: linear-gradient(to right, #e2e2e2, #520a18);
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
        }

        .navbar {
            width: 75%;
            height: auto;
            background-color: white;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            top: 20px;
            left: 50%; /* Center the navbar horizontally */
            transform: translateX(-50%); /* Adjust for centering */
            z-index: 1000;
            padding: 10px 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar .logo {
            display: flex;
            align-items: center;
        }

        .navbar .logo img {
            height: 50px;
            margin-right: 10px;
        }

        .navbar .nav-links {
            display: flex;
            align-items: center;
        }

        .navbar a {
            color: black;
            text-decoration: none;
            font-weight: bold;
            margin: 0 20px;
            font-size: 16px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: all 0.3s ease;
        }

        .navbar a img {
            width: 30px;
            height: 30px;
            margin-bottom: 5px;
        }

        .navbar a::before {
            content: '';
            position: absolute;
            inset: -4px; /* Increased the size of the border */
            border: 2px solid transparent;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .navbar a:hover {
            color: #520a18;
            transform: scale(1.1);
        }

        .navbar a:hover::before {
            border-color: #520a18; /* Maroon color */
        }

        .content {
            margin-top: 100px;
            padding: 20px;
            text-align: center;
        }

        .content h1 {
            font-size: 36px;
            color: #520a18;
        }

        .content p {
            font-size: 18px;
            margin-top: 10px;
        }

        .btn-foto-sekarang {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background: linear-gradient(to right, #65000B, #520a18);
            border: none;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-foto-sekarang:hover {
            background: linear-gradient(to right, #520a18, #65000B);
            transform: scale(1.05);
        }

        .logo-center {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo-center img {
            max-height: 100px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('images/potafoto.png') }}" alt="Potafoto Logo">
            Potafoto
        </div>
        <div class="nav-links">
            <a href="#" data-name="Akun">
                <img src="https://img.icons8.com/ios-filled/50/520a18/user-male.png" alt="Akun Icon"/>
                <span>Akun</span>
            </a>
            <a href="#" data-name="Contact">
                <img src="https://img.icons8.com/ios-filled/50/520a18/contacts.png" alt="Contact Icon"/>
                <span>Contact</span>
            </a>
        </div>
    </div>

    <div class="content">
        <h1>Welcome to Potafoto</h1>
        <p>Your Photobox, Anywhere!</p>
        <a href="{{ url('/fotonow') }}" class="btn-foto-sekarang">Foto Sekarang</a>
    </div>
</body>
</html>
