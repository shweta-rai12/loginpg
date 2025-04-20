<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #007BFF;
            padding: 15px 20px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo {
            font-weight: bold;
            font-size: 20px;
        }

        .navbar .nav-links a {
            color: white;
            text-decoration: none;
            margin: 0 12px;
            font-weight: 500;
        }

        .navbar .user-info {
            font-size: 14px;
        }

        .welcome-container {
            background-color: #f4f4f4;
            padding: 40px 20px;
            text-align: center;
        }

        .section {
            padding: 40px 20px;
            text-align: center;
        }

        .section h2 {
            margin-bottom: 20px;
            color: #007BFF;
        }

        .services, .testimonials, .gallery {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 250px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .card h3 {
            margin-top: 0;
            color: #333;
        }

        .gallery img {
            width: 250px;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        .footer p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">MyApp</div>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#services">Services</a>
            <a href="#gallery">Gallery</a>
            <a href="#testimonials">Testimonials</a>
        </div>
        <div class="user-info">
            Welcome, <?php echo $_SESSION['username']; ?> |
            <a href="logout.php" style="color: #f8d7da; text-decoration: underline;">Logout</a>
        </div>
    </div>

    <!-- Welcome -->
    <div class="welcome-container">
        <h1>Welcome to MyApp</h1>
        <p>Hello <strong><?php echo $_SESSION['username']; ?></strong>, glad to have you back!</p>
    </div>

    <!-- Our Services -->
    <div class="section" id="services">
        <h2>Our Services</h2>
        <div class="services">
            <div class="card">
                <h3>Web Design</h3>
                <p>We create stunning, responsive websites tailored to your brand.</p>
            </div>
            <div class="card">
                <h3>Development</h3>
                <p>Backend and frontend development for all types of projects.</p>
            </div>
            <div class="card">
                <h3>SEO Optimization</h3>
                <p>Boost your online visibility with our SEO services.</p>
            </div>
        </div>
    </div>

    <!-- Our Gallery -->
    <div class="section" id="gallery">
        <h2>Our Gallery</h2>
        <div class="gallery">
            <img src="https://assets.cntraveller.in/photos/66667d71fec9b2e737ab2480/master/w_1600%2Cc_limit/DAG%2520-%2520Caption%2520_Installation%2520shot%2520at%2520DAG%25201_%2520(1).jpg" alt="Gallery Image 1">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ66ehrmpr0aPPklBr-hM4if0RfKKgmByUzoA&s" alt="Gallery Image 2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSitriLEHOE0mZweBpnjp-_2AAATWl64mToTQ&s" alt="Gallery Image 3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRA3mwhgqKXUS7K7bYhWDNLhbncme8OhIp_Rg&s" alt="Gallery Image 4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsSXVpr0LT5x6gvOPd5DO98g0T2eUqOyYlog&s" alt="Gallery Image 5">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzQXCxde-TvPxAiFJMYmgnFFCYJDJEk5WqCw&s" alt="Gallery Image 6">
        </div>
    </div>

    <!-- Testimonials -->
    <div class="section" id="testimonials">
        <h2>What Our Clients Say</h2>
        <div class="testimonials">
            <div class="card">
                <p>"Fantastic work! Highly recommend their web services."</p>
                <h4>- Alex M.</h4>
            </div>
            <div class="card">
                <p>"They built our website exactly how we envisioned it."</p>
                <h4>- Sarah T.</h4>
            </div>
            <div class="card">
                <p>"Professional and always on time. A great experience."</p>
                <h4>- John D.</h4>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; <?php echo date("Y"); ?> MyApp. All rights reserved.</p>
        <p>Contact us at support@myapp.com</p>
    </div>

</body>
</html>
