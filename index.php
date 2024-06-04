<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poetsen+One&display=swap" rel="stylesheet">
    <style>
        /*Universal css start*/
        .anton-regular {
            font-family: "Anton", sans-serif;
            font-weight:400;
            
        }
        .navbar_start{
            color:white;
            text-decoration:none;
        }
        .navbar{
            display: flex;
            align-items:center;
            justify-content:space-around;
            background-color:black;
            height:60px;
            margin:30px 60px;
            border-radius:20px;
        }
        .navbar_menu{
            display: flex;
            gap: 10px;
            list-style-type:none;
            margin-left:100px;
        }
        .navbar-item{
            margin-left:40px;
        }
        .navbar-link{
            text-decoration:none;
            color:white;
        }
        .navbar-link:hover {
           color: #d91e36;
       }
        /* Universal css end */
        /* Private css about start*/
        .mainpage{
            display: flex;
            justify-content:space-between;
            margin-top: 100px;
            margin-left:50px;

        }
        .heading{
            color:black;
            font-size:24px;
            margin-bottom:10px;
        }
        .about {
            background-color: #ffffff;
            padding: 20px;
            max-width: 500px;
            margin: 20px;
            margin-left: 50px;
            border-radius: 10px;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .about p {
            font-size: 16px;
            color: #333333;
            line-height: 1.6;
        }
        .image{
        margin-right:80px;
        }
        /* Private css about end */
    </style>
</head>
<body>
    <!-- Universal html -->
    <div class="container">
        <div class="navbar">
            <a href="#" class='navbar_start anton-regular'>Car-Lagbe?</a>
            <ul class='navbar_menu'>
                <li class='navbar-item'><a href="index.php" class='navbar-link'>Home</a></li>
                <li class="navbar-item"> <a href="register.php " class='navbar-link'>Register</a></li>
                <li class="navbar-item"> <a href="request.php " class='navbar-link'>Request</a></li>
                <li class="navbar-item"> <a href="search.php " class='navbar-link'>Search </a></li>
                <li class="navbar-item"> <a href="admin.php " class='navbar-link'>Admin</a></li>
            </ul>
        </div>
        <!-- Private html -->
        <div class="mainpage">
                <div class="about">
                       <h2 class="heading">About Us</h2>
                    <p>
                        Welcome to Car-Lagbe, your premier destination for hassle-free car rentals.From seamless booking processes to personalized 
                        assistance and 24/7 support, we're here to make your rental experience effortless.Whether it's a weekend getaway or a business trip, we're here to elevate your journey. 
                        Choose Car-Lagbe for an unforgettable adventure on your terms.
                    </p>
                </div>
                <div class="image">
                     <img src="Car Lagbe.png" alt="" srcset="">
                </div>
          </div>
    </div>
   
</body>
</html>