<!-- <?php

    $connection = mysqli_connect('localhost','root','','book_db');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        $request = "insert into book_formm(name, email, phone, address, location, guests, arrivals , leaving) values
        ('$name', '$email', '$phone', '$address', '$location','$guests','$arrivals','$leaving')";

        mysqli_query($connection, $request);
        header('location:book.php');



    }

    else{
        echo'somethingwent wrong try again';
    }
?> -->

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    // Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "book_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into database
    $sql = "INSERT INTO book_formm (name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!-- HTML form
<form method="POST" action="http://localhost/miniproject/book_form.php">
    <input type="text" name="name" placeholder="Name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="tel" name="phone" placeholder="Phone"><br>
    <input type="text" name="address" placeholder="Address"><br>
    <input type="text" name="location" placeholder="Location"><br>
    <input type="number" name="guests" placeholder="Number of guests"><br>
    <input type="date" name="arrivals" placeholder="Arrival date"><br>
    <input type="date" name="leaving" placeholder="Leaving date"><br>
    <input type="submit" value="Submit">
</form> -->