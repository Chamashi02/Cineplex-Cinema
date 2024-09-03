<?php
    include('config.php');
    extract($_POST);

    // Perform some basic validation
    if(empty($name) || empty($email) || empty($mobile) || empty($subject)) {
        // Handle empty fields
        echo "Please fill in all the fields.";
        exit;
    }

    // SQL injection prevention: use prepared statements
    $stmt = $con->prepare("INSERT INTO tbl_contact VALUES (NULL, ?, ?, ?, ?)");
    if(!$stmt) {
        // Handle SQL error
        echo "Error preparing SQL statement.";
        exit;
    }

    // Bind parameters and execute the statement
    $stmt->bind_param("ssss", $name, $email, $mobile, $subject);
    $result = $stmt->execute();

    if(!$result) {
        // Handle SQL error
        echo "Error executing SQL statement.";
        exit;
    }

    // Close the statement and database connection
    $stmt->close();
    $con->close();

    // Redirect back to the contact page after successful submission
    header('Location: contactus.php');
    exit;
?>
