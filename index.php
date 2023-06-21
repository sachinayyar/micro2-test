<!DOCTYPE html>
<html>
<head>
    <title>Shopping Application</title>
    <style>
        /* Style for the overall page layout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        h2 {
            color: #666;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        /* Style for product listing */
        .product {
            display: inline-block;
            margin-right: 20px;
            text-align: center;
        }

        .product img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .product h3 {
            margin: 0;
            font-size: 18px;
        }

        .product p {
            margin: 5px 0;
        }

        .product button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            transition-duration: 0.4s;
        }

        .product button:hover {
            background-color: #45a049;
        }

        /* Style for the shopping cart section */
        #cart {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 10px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .cart-item img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            margin-right: 10px;
        }

        .cart-item p {
            margin: 0;
        }

        /* Style for links */
        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
        
        /* Style for the login and cart buttons */
        #login-button, #cart-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            transition-duration: 0.4s;
            margin-right: 10px;
        }

        #login-button:hover, #cart-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Shopping Application</h1>

    <div>
        <button id="login-button">Login</button>
        <button id="cart-button">Cart</button>
    </div>
    

    <h2>Featured Products</h2>
    <div class="product">
        <img src="https://th.bing.com/th/id/R.d8aedc575ac32a253b5be5d25a52d598?rik=aLHj1W5emKA1Iw&riu=http%3a%2f%2fthewowstyle.com%2fwp-content%2fuploads%2f2015%2f02%2f1573618audi-car-images.jpg&ehk=EF0VdTd7DJoHQviRvsvMwZOxXN8XnzPldXhNrNT4Rl0%3d&risl=&pid=ImgRaw&r=0" alt="Product 1">
        <h3>Product 1</h3>
        <p>Price: $99.99</p>
        <button>Add to Cart</button>
    </div>

    <div class="product">
        <img src="https://th.bing.com/th/id/OIP.T_QkgBkAt4WXOlQlavgw4QHaEo?pid=ImgDet&rs=1" alt="Product 2">
        <h3>Product 2</h3>
        <p>Price: $49.99</p>
        <button>Add to Cart</button>
    </div>

    <div class="product">
        <img src="https://th.bing.com/th/id/R.339cbff589da266b3e24ab3933c29f84?rik=gnA2HFtCOJ%2b1mw&riu=http%3a%2f%2f1.bp.blogspot.com%2f_ltoEMuaSQ-I%2fTDy6npUcP6I%2fAAAAAAAAAAs%2fUEaE8Yk9tt4%2fs1600%2fcar6.jpg&ehk=rl8ysLHMoqUCUsOvHAiZcR0rWkgS%2buDmjH9%2fHRSUx7A%3d&risl=&pid=ImgRaw&r=0" alt="Product 3">
        <h3>Product 3</h3>
        <p>Price: $149.99</p>
        <button>Add to Cart</button>
    </div>

    <script>
        // JavaScript code for handling button clicks
        var loginButton = document.getElementById("login-button");
        var cartButton = document.getElementById("cart-button");

        loginButton.addEventListener("click", function() {
        window.location.href = "http://microservices-demo-my-gateway-525eca1d5089dbdc-istio-system.apps.cluster-sbj27.sbj27.sandbox2370.opentlc.com/loginpage";
            alert("Login button clicked!");
        });

        cartButton.addEventListener("click", function() {
            alert("Cart button clicked!");
        });
    </script>
</body>
</html>
