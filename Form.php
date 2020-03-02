<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nameLastName = $_POST['nameLastName'];
    $companyName = $_POST['companyName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $students = $_POST['Students'];

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "Project1";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO Form (NameLastName, CompanyName, email, phone, TypeOfStudy)
    VALUES ('$nameLastName','$companyName','$email','$phone','$students')";

    if (mysqli_query($conn, $sql)) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
     } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>