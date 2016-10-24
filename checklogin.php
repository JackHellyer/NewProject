<?php
/**
 * Created by PhpStorm.
 * User: 1607973
 * Date: 24/10/2016
 * Time: 15:57
 */

$username = "Jack";
$password = "password";


if($username == "Jack" && $password == "password")
{
    setcookie('access_level','standarduser');
    setcookie('name','Jack');
}

header("Location: homepage.php");

?>