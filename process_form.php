<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["user_email"];
    $message = $_POST["user_message"];
    
    // Process the form data (e.g., save to a database, send email, etc.)
    
    // Example: Save form data to a text file
    $file = 'form_data.txt';
    $data = "Email: $email\nMessage: $message\n\n";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
    
    // Redirect back to the form page (optional)
    header("Location: contact_us.html");
    exit;
} else {
    // Handle invalid requests
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
