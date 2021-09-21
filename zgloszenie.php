<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wędkowanie - moje hobby</title>
</head>
<body>
<?php
    $lowisko = $_POST['lowisko'];
    $data = $_POST['data'];
    $sedzia = $_POST['sedzia'];

    $db = new mysqli('localhost', 'root', '', 'wedkarstwo');

    $sql = "INSERT INTO 'zawody_wedkarskie' 'id', 'Karty_wedkarskie_id', VALUES (NULL, '2', '$lowisko', '$data', '$sedzia')";

    $db->query($sql);
    $db->close();

?>
</body>
</html>