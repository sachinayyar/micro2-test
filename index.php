<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];

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
        header('Content-Type: application/json');
        echo json_encode(array('message' => 'Data saved successfully.'));
    } else {
        header('Content-Type: application/json');
        echo json_encode(array('message' => 'Error saving data.'));
    }

    mysqli_close($conn);
} else {
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
