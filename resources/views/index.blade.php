<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guitar Shop</title>
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navigation bar styles */
        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Right-aligned buttons */
        .right-buttons {
            float: right;
        }

        /* Style for signup and login buttons */
        .signup-button,
        .login-button {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-right: 10px;
            cursor: pointer;
        }

        .signup-button:hover,
        .login-button:hover {
            background-color: #45a049;
        }

        /* Additional content section */
        .content {
            padding: 20px;
            margin: auto 5%;
        }

        .content h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .content p {
            font-size: 16px;
            line-height: 1.5;
        }

        /* Featured products section */
        .featured-products {
            margin-top: 30px;
            margin: auto 5%
        }

        .featured-products h2 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .product-card {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
        }

        /* Testimonials section */
        .testimonials {
            margin-top: 30px;
            margin: auto 5%
        }

        .testimonial {
            font-style: italic;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="#">Home</a>
        <a href="/guitars">Products</a>
        <div class="right-buttons">
            <button class="signup-button"><a href="/auth">Sign Up</a></button>
            <button class="login-button"><a href="/auth">Login</a></button>
        </div>
    </div>

    <!-- Additional content section -->
    <div class="content">
        <h1>Welcome to Our Guitar Shop!</h1>
        <p>
            Explore our wide range of guitars, from classic acoustic to electric
            shredders. Whether you're a beginner or a seasoned player, we have the
            perfect instrument for you.
        </p>
        <p>Why choose us?</p>
        <ul>
            <li>Quality craftsmanship</li>
            <li>Expert advice from our passionate staff</li>
            <li>Customization options</li>
            <li>Free shipping on orders over $100</li>
        </ul>
    </div>

    <!-- Featured products section -->
    <div class="featured-products">
        <h2>Featured Products</h2>
        <div class="product-card">
            <h3>Gibson Les Paul Standard</h3>
            <p>The iconic Les Paul with rich tones and stunning finish.</p>
        </div>
        <div class="product-card">
            <h3>Fender Stratocaster</h3>
            <p>A versatile electric guitar loved by musicians worldwide.</p>
        </div>
    </div>

    <!-- Testimonials section -->
    <div class="testimonials">
        <h2>What Our Customers Say</h2>
        <div class="testimonial">
            "Absolutely thrilled with my new guitar! Excellent service and top-notch
            quality."
        </div>
        <div class="testimonial">
            "The staff at Guitar Shop really know their stuff. They helped me find
            the perfect instrument."
        </div>
        <div class="testimonial">
            "Fast shipping and great communication. Will definitely shop here
            again!"
        </div>
    </div>
</body>

</html>
