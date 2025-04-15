<?php
$firstname_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
        $firstname_error = "Please enter your name";
    } else {
        $firstname = htmlspecialchars($_POST["firstname"]);
    }
}
?>