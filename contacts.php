<?php
// contacts.php - Handle form submission and store data in the database
include('dbconn.php');

// Check if form fields are set
if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Phone = $_POST['phone'];
    $message = $_POST['message'];

    // Prepare the SQL statement
    $sql = "INSERT INTO `contacts` (Name, Email, Phone, Message) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("ssss", $name, $email, $Phone, $message);

        // Execute the statement
        if ($stmt->execute()) {
            //echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
} else {
    echo "Error: Required form fields are not set."; 
}

$conn->close();
?>