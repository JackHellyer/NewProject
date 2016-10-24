<?php
/**
 * Created by PhpStorm.
 * User: 1607973
 * Date: 24/10/2016
 * Time: 15:58
 */

$accessLevel = $_COOKIE['access_level'];
$user = $_COOKIE['name'];

echo $user;
displayAccessLevelInformation($accessLevel);




function displayAccessLevelInformation($accessLevel) {
    if ($accessLevel == "standarduser") {
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif ($accessLevel == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative rights</p>";
    }
}