<?php
if ( isset($_SESSION['loggedin']) &&  $_SESSION['loggedin'] === true ) {
   echo '<a href="?logout=1">Logout</a>';
}

//if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
//    $_SESSION['SessionMsg'] = 'You are signed in as .<br /> <a href="?logout=1">Logout</a><br /><br />';
//} else {
//    $_SESSION['SessionMsg'] = 'You are not currently signed in.<br /> <a href='login.php'>Logout</a><br /><br />";
//}

$logOut = filter_input(INPUT_GET, 'logOut');

if ($logOut == 1) {
    $_SESSION['loggedIn'] = false;
    $_SESSION['LoggedInName'] = '';   
}

echo $_SESSION['SessionMsg'];
