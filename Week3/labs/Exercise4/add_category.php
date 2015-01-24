<?php
// Get the category data
$category_id = $_POST['category_id'];
$name = $_POST['name'];

// Validate inputs
if (empty($name)) {
    $error = "Invalid entry. Category name field must not be empty.";
    include('error.php');
} else {
    // If valid, add the product to the database
    require_once('database.php');
    $query = "INSERT INTO categories
                 (categoryID, categoryName)
              VALUES
                 ('$category_id', '$name')";
    $db->exec($query);

    // Display the Category List page
    include('index.php');
}
?>
