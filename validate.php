<?php
$users = fopen("users.txt", "r") or die("Unable to open file.");
while (!feof($users)) {
    $line = fgets($users);
    $line = str_replace("\n", "", $line);
    $word = explode(" ", $line);
    $first = $word[0];
    $last = $word[1];
    $email = $word[2];
    if ($_POST[first])
}
fclose($users);
?>