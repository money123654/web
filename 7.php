<?php
// Set a cookie
setcookie("user", "John Doe", time() + (86400 * 30), "/");

// Check if the cookie is set
if(isset($_COOKIE["user"])) {
    echo "Cookie 'user' is set!<br>";
    echo "Value: " . $_COOKIE["user"];
} else {
    echo "Cookie 'user' is not set!";
}
?>