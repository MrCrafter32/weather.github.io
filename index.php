<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <div class='d-flex justify-content-end pg-navbar'>
        <nav class='navbar'>
            <ul class='nav justify-content-end'>
                <li class='nav-item'>
                    <a class='nav-link' aria-current="page" href="index.php">Home</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' aria-current="page" href="contact.php">Contact</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="header">
        <h1>Enter your City Name</h1>


    <div>
        <form action="action.php" method="get">
            <input  type="text" name="name" placeholder="Name">
            <button type="submit" name="submit">Submit</button>
        </form>
         </div>
    </div>




    <div class="footer">
        Powered by <a href="https://www.weatherapi.com">WeatherAPI</a>
    </div>
</body>

</html>