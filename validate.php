<?php
$users = fopen("users.txt", "r") or die("Unable to open file.");
while (!feof($users)) {
    $valid = FALSE;
    $line = fgets($users);
    $line = str_replace("\n", "", $line);
    $word = explode(" ", $line);
    if ($_POST[first] == $word[0] && $_POST[last] == $word[1] && $_POST[email] == $word[2]) {
        $valid = TRUE;
    }
}
    if($valid === TRUE) {
        header("Location:congratulations.html");
        exit();
    }
    else {
        header("Location:sorry.html");
        exit();
}
fclose($users);
?>