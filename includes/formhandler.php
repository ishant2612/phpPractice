<?php
// var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    // echo $firstname;
    // header("Location: ../MyWebsite/index.php");

}
