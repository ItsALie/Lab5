<?php
$users = fopen("users.txt", "r") or die("Unable to open file.");
$valid = FALSE;
while (!feof($users)) {
    $line = fgets($users);
    $line = str_replace("\n", "", $line);
    $word = explode(" ", $line);
    for($i = 0; $i < 3; $i++) {
        $word[$i] = str_replace(" ", "", $word[$i]);
    }
    $_POST[first] = str_replace(" ", "", $_POST[first]);
    $_POST[last] = str_replace(" ", "", $_POST[last]);
    $_POST[email] = str_replace(" ", "", $_POST[email]);
    $_POST[first] = str_replace("\n", "", $_POST[first]);
    $_POST[last] = str_replace("\n", "", $_POST[last]);
    $_POST[email] = str_replace("\n", "", $_POST[email]);
    if((strcasecmp($_POST[first], $word[0]) && strcasecmp($_POST[last], $word[1]) && strcasecmp($_POST[email], $word[2])) == 0) {
        $valid = TRUE;
    }
    if ($_POST[first] == $word[0] && $_POST[last] == $word[1] && $_POST[email] == $word[2]) {
        $valid = TRUE;
    }
}
    if($valid == TRUE) {
        header("Location:congratulations.html");
        exit();
    }
    else {
        header("Location:sorry.html");
        exit();
}
fclose($users);
?>