<?php

if (isset($_SESSION['loggedIn']) &&
        $_SESSION['loggedIn'] === true) {
    echo '<a href="?logout=1">Logout</a>';
} else {
    echo '<a href="signup.php">Sign Up</a><br />
           <a href="login.php">Login</a>';
}
$logOut = filter_input(INPUT_GET, 'logOut');

if ($logOut == 1) {
    $_SESSION['loggedIn'] = false;
}
?>