<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $emri = test_input($_POST["emri"]);
    $mbiemri = test_input($_POST["mbiemri"]);
    $email = test_input($_POST["email"]);
    $telefoni = test_input($_POST["telefoni"]);

    // Process file upload
    $cvFile = $_FILES["cv"];
    $cvFileName = $cvFile["name"];

    // Move the uploaded file to a specific directory
    $uploadDirectory = "uploads/";
    $targetFilePath = $uploadDirectory . basename($cvFileName);
    move_uploaded_file($cvFile["tmp_name"], $targetFilePath);

    // You can perform further processing or store the data in a database
    // For now, let's just print the submitted data
    echo "Emri: $emri<br>";
    echo "Mbiemri: $mbiemri<br>";
    echo "Email: $email<br>";
    echo "Telefoni: $telefoni<br>";
    echo "CV: $cvFileName<br>";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

