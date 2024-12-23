<?php
// Get the ID from the URL query parameter
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Check if ID is present
if ($id) {
    // Define the base URL or redirect URL pattern
   
    //$baseUrl = "http://xsmarters.top:8080/live/440/440/{$id}.ts";
      // $baseUrl = "http://opplex.live:8080/8899@karim/9988@karim/{$id}.ts";
  $baseUrl = "http://port.denver1769.in/oplx2.php?tv={$id}.ts";

    
    // Create the full redirect URL by appending the ID as a query parameter
    $redirectUrl = $baseUrl;

    // Redirect to the new URL
    header("Location: " . $redirectUrl);
    exit(); // Ensure the script stops after redirection
} else {
    // If no ID is provided, redirect to a default page or show an error
    header("Location: https://example.com/error.php");
    exit();
}
?>
