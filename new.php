<?php
// Connect to the MySQL database
$host = "localhost";  // Change if your database server is different
$username = "root";   // Default username for XAMPP
$password = "";       // Default password for XAMPP (empty by default)
$database = "bank";  // Your database name

$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Retrieve data from the form
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$address = $_POST['address'];
$email= $_POST['email'];
$acctype= $_POST['acctype'];
$aadhar= $_POST['aadhar'];
$pan= $_POST['pan'];
$gender= $_POST['gender'];
// Insert data into the database
$sql = "INSERT INTO kvb (firstname,lastname,username,password,address,email,acctype,aadhar,pan,gender) VALUES ('$firstname', '$lastname','$username','$password','$address','$email','$acctype','$aadhar','$pan','$gender')";

if ($mysqli->query($sql) === TRUE) {
    echo "table data has been successfully submitted!";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

// Close the database connection
$mysqli->close();
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM kvb WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
 
    
    
    $conn->close();
     header("location:Nivass.html");
} else {
    echo"Wrong username and password!!!";
}
$conn->close();

    exit();

?>