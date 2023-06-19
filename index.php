<!DOCTYPE html>
<html>
<head>
    <title>Cloth Products</title>
    <style>
        .product {
            width: 200px;
            display: inline-block;
            margin: 10px;
        }
        .product img {
            width: 100%;
            height: auto;
        }
        .product p {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    // Array of cloth products
    $products = array(
        array(
            'name' => 'T-Shirt',
            'image' => 'https://images.pexels.com/photos/1335077/pexels-photo-1335077.jpeg?cs=srgb&dl=automobile-automotive-car-1335077.jpg&fm=jpg',
            'price' => 19.99
        ),
        array(
            'name' => 'Jeans',
            'image' => 'C:\Users\integra\Pictures\architectue.PNG',
            'price' => 49.99
        ),
        array(
            'name' => 'Dress',
            'image' => 'dress.jpg',
            'price' => 79.99
        )
    );

    // Displaying products
    foreach ($products as $product) {
        echo '<div class="product">';
        echo '<img src="images/' . $product['image'] . '" alt="' . $product['name'] . '">';
        echo '<p>' . $product['name'] . ' - $' . $product['price'] . '</p>';
        echo '</div>';
    }
    ?>
</body>
</html>
