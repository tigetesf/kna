<?php
$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];
$birthdate = $_POST['birthdate'];
$address = $_POST['address'];
$country = $_POST['country'];
$amountInBirr = $_POST['amountInBirr'];
$gender = $_POST['gender'];
$status = $_POST['status'];
$comment = $_POST['comment'];
$conn = new mysqli('localhost', 'root', '', 'kena');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registration (firstName, middleName, lastName, phone, birthdate, address, country, amountInBirr, gender, status, comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die('Prepare failed: ' . $conn->error);
    }
    $stmt->bind_param("sssssssssss", $firstName, $middleName, $lastName, $phone, $birthdate,$address, $country, $amountInBirr, $gender, $status, $comment);
    if (!$stmt->execute()) {
        die('Execute failed: ' . $stmt->error);
    }
    $stmt->close();
    $conn->close();
    // Registration is successful
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <style>
        body {
            background-image: url(ls.jpg);
            background-size: cover;
            background-position: center;
            color: blue;
            font-size: 24px; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            letter-spacing: 2px;
        }
        .success-message {
            padding: 20px;
            text-align: center;
        }
        @media screen and (max-width: 600px) {
            body {
                background-size: contain; 
            }
    </style>
</head>
<body>
    <div class="success-message">Registration is successful.</div>
</body>
</html>';
}
?>
