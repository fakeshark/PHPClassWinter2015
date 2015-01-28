<?php
    require_once('database.php');

    // Get category ID
    if(!isset($category_id)) {
        $category_id = $_GET['category_id'];
        if (!isset($category_id)) {
            $category_id = 1;
        }
    }

    // Get name for current category
    $query = "SELECT * FROM categories
              WHERE categoryID = $category_id";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['categoryName'];

    // Get all categories
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $categories = $db->query($query);

    // Get products for selected category
    $query = "SELECT * FROM products
              WHERE categoryID = $category_id
              ORDER BY productID";
    $products = $db->query($query);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
            <!-- display list of user information -->
            <h2>Users:</h2>
            <table>
                <tr>
                    <td>Row #:</td>
                    <td>User Name:</td>
                    <td>Phone #:</td>
                    <td>Email:</td>
                    <td>Zip Code:</td>
                </tr>
            <?php foreach ($categories as $category) : ?>
                <tr id="" >
                    <td><?php echo $users['id']; ?></td>
                    <td><?php echo $users['name']; ?></td>
                    <td><?php echo $users['phone']; ?></td>
                    <td><?php echo $users['email']; ?></td>
                    <td><?php echo $users['zip']; ?></td>
                </tr>
            <?php endforeach; ?>
            </table>
    </body>
</html>
