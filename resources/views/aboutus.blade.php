<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us | Metro Essence</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        body {
            font-family: 'Times New Roman', serif;
            background-color: #fcfcfc;
            color: #333;
            line-height: 1.7;
        }
        .navbar {
            background-color: #fff;
            border-bottom: 1px solid #eee;
            padding: 15px 0;
        }
        .navbar-brand {
            font-family: 'Times New Roman', serif;
            font-weight: 300;
            letter-spacing: 2px;
            color: #5d1d48 !important;
        }
        .nav-link {
            color: #5d1d48 !important;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }
        /* Apply underline only to top-level nav links (not dropdown toggles) */
        .navbar-nav > .nav-item > .nav-link:not(.dropdown-toggle) {
            position: relative;
            color: #000;
            transition: color 0.3s ease;
        }

        .navbar-nav > .nav-item > .nav-link:not(.dropdown-toggle)::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            height: 2px;
            width: 0;
            background-color: #5d1d48;
            transition: width 0.3s ease;
            transform-origin: center;
        }

        .navbar-nav > .nav-item > .nav-link:not(.dropdown-toggle):hover::after {
            width: 100%;
        }        .page-title {
            font-family: 'Times New Roman', serif;
            font-size: 2.5rem;
            font-weight: 400;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }
        .section-title {
            font-family: 'Times New Roman', serif;
            font-size: 1.8rem;
            font-weight: 400;
            color: #5d1d48;
            margin: 40px 0 30px;
            text-align: center;
            letter-spacing: 2px;
            text-transform: uppercase;
            position: relative;
            padding-bottom: 15px;
        }
        .section-title:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 2px;
            background-color: #5d1d48;
        }
        .about-content {
            max-width: 800px;
            margin: 0 auto 50px;
            padding: 30px;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border-radius: 10px;
            text-align: center;
        }
        .about-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .team-section {
            background-color: #f9f5f8;
            padding: 60px 0;
            margin-top: 50px;
        }
        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }
        .team-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 15px;
            object-fit: cover;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            background-color: #e6e6e6;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
        .team-photo i {
            font-size: 50px;
            color: #999;
        }
        .team-name {
            font-size: 1.2rem;
            color: #5d1d48;
            margin-bottom: 5px;
        }
        .team-position {
            font-size: 0.9rem;
            color: #777;
            font-style: italic;
        }
        .decorative-element {
            color: #5d1d48;
            font-size: 1.5rem;
            margin: 20px 0;
        }
        footer {
            background-color: #f8f8f8;
            padding: 30px 0;
            margin-top: 50px;
            border-top: 1px solid #eee;
        }
        .footer-links {
            list-style: none;
            padding: 0;
        }
        .footer-links li {
            margin-bottom: 10px;
        }
        .footer-links a {
            color: #5d1d48;
            text-decoration: none;
            font-size: 0.9rem;
        }
        .social-icons {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .social-icons li {
            margin: 0 10px;
        }
        .social-icons a {
            color: #5d1d48;
            font-size: 1.2rem;
        }
        .values-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 40px;
            gap: 30px;
        }
        .value-item {
            text-align: center;
            flex: 0 0 calc(33.333% - 30px);
            padding: 25px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .value-icon {
            font-size: 2rem;
            color: #5d1d48;
            margin-bottom: 15px;
        }
        @media (max-width: 768px) {
            .value-item {
                flex: 0 0 100%;
                margin-bottom: 20px;
            }
        }
        .page-title {
            font-size: 1.5rem;
            font-weight: 400;
            color: #5d1d48;
            margin: 40px 0 30px;
            text-align: center;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        .team-photo {
            position: relative;
            width: 150px;
            height: 150px;
            margin: 0 auto;
        }

        .team-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            display: block;
            position: relative;
            z-index: 2;
        }

        /* Pulsing ring effect */
        .team-photo::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 150px;
            height: 150px;
            border: 3px solid #5d1d48;
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(1);
            opacity: 0;
            z-index: 1;
        }

        /* Trigger pulsing animation on hover */
        .team-photo:hover::after {
            animation: pulseRing 1.2s infinite ease-out;
        }

        @keyframes pulseRing {
            0% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.6;
            }
            70% {
                transform: translate(-50%, -50%) scale(1.6);
                opacity: 0;
            }
            100% {
                transform: translate(-50%, -50%) scale(1.6);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    @include('components.navbar')
 
    <h1 class="page-title">About Us</h1>
        
    <!-- About Section -->
    <section class="container">
        <div class="about-content">
            <img src="images/teamBG.jpg" alt="Metro Essence Perfume Collection" class="about-image">
            
            <div class="decorative-element">✧ ✦ ✧</div>
            
            <p>
                At PrintifyHub, we turn your creativity into reality. We specialize in custom-printed apparel and personalized merchandise that let you showcase your unique style. Whether you're an artist, entrepreneur, or just someone with a great idea, PrintifyHub provides an easy-to-use platform to upload your designs and bring them to life on high-quality products. Our mission is to empower self-expression through custom fashion—designed by you, made by us. With a focus on quality, innovation, and customer satisfaction, PrintifyHub is your go-to destination for personalized apparel that stands out.            
            </p>
            
            <div class="decorative-element">✧ ✦ ✧</div>
        </div>
        

    <!-- Footer -->
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>