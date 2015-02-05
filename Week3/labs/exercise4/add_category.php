<?php
// Get the category data
$categoryName = $_POST['categoryName'];


// Validate inputs
if ( empty($categoryName) ) {
    $error = "Invalid category data. Check all fields and try again.";
    include('error.php');
} else {
    // If valid, add the category to the database
    require_once('database.php');
    $query = "INSERT INTO categories
                 (categoryName)
              VALUES
                 ('$categoryName')";
    $db->exec($query);

    // Display the Product List page
    include('index.php');
}
?>
