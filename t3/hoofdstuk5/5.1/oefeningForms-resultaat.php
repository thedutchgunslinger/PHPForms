<?php
$title = $_POST["title"];
$message = $_POST["message"];
$password = $_POST["password"];
$amount = $_POST["amount"];

if($password == "wachtwoord")
{
    for($i = 1; $i <= $amount; $i = $i + 1)
    {
        echo "Id: ".$i."<br>";
        echo "Titel: ".$title."<br>";
        echo "Message: ".$message."<br>";
        echo "<hr>";
    }
}else
{
    echo "oops iets ging er mis!";
}