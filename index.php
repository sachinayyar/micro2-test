<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];

    // Make an HTTP request to Microservice 1 for authentication
    $authUrl = 'http://microservice1-url/authenticate.php';
    $authData = array('username' => 'your-username', 'password' => 'your-password'); // Provide your authentication credentials
    $authOptions = array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-Type: application/json',
            'content' => json_encode($authData)
        )
    );
    $authContext = stream_context_create($authOptions);
    $authResult = file_get_contents($authUrl, false, $authContext);
    
    // Process the authentication result
    $authResponse = json_decode($authResult);
    if ($authResponse->success) {
        // Authentication successful, proceed with data storage
        $host = getenv("mysql_host");
        $username = getenv("username");
        $password = getenv("password");
        $database = getenv("database");
        
        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO students (name, email, mobile, city) VALUES ('$name', '$email', '$mobile', '$city')";

        if (mysqli_query($conn, $sql)) {
            echo "Data saved successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        // Authentication failed, display an error message
        echo "Authentication failed: " . $authResponse->message;
    }
} else {
    // Display the form
    ?>
    <!doctype html>
    <html lang="en">
    <head>
    <title>MySQL to HTML</title>
    <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <form action="#" method="POST">
        Name : <input type="text" name="name"> <br>
        Email : <input type="email" name="email"> <br> 
        Mobile : <input type="number" name="mobile"> <br>
        City : <input type="text" name="city"> <br>
        <input type="submit" name="submit" value="send data">
    </form>
    </body>
    </html>
    <?php
}
?>
