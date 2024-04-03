<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guitar Shop</title>
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Form container styles */
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        /* Form input styles */
        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        /* Form button styles */
        .form-container button {
            background-color: #0074D9;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        /* Form headings styles */
        .form-container h2 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        /* Form columns */
        .form-column {
            float: left;
            width: 50%;
            padding: 0 10px;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            display: table;
            clear: both;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

    @auth
        <script>
            window.location = "/guitars";
        </script>
    @else
        <div class="form-container clearfix">
            <div class="form-column">
                <h2>Registration</h2>
                <form action="/register" method="post">
                    @csrf
                    <input type="text" name="username" placeholder="Username"><br>

                    <input type="email" name="email" placeholder="Email"><br>

                    <input type="password" name="password" placeholder="Password"><br>

                    <input type="password" name="password_confirmation" placeholder="Confirm Password"><br>

                    <input type="text" name="firstname" placeholder="First Name"><br>

                    <input type="text" name="lastname" placeholder="Last Name"><br>

                    <input type="text" name="billing_address" placeholder="Billing Address"><br>

                    <input type="text" name="shipping_address" placeholder="Shipping Address"><br>
                    <button type="submit" name="register">Register</button>
                </form>
            </div>
            <div class="form-column">
                <h2>Login</h2>
                <form action="/login" method="post">
                    @csrf
                    <input type="text" name="username" placeholder="Username"><br>

                    <input type="password" name="password" placeholder="Password"><br>
                    <button type="submit" name="login">Login</button>
                </form>
            </div>
        </div>
    @endauth
</body>

</html>
