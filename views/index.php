<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php

        require_once "../controller/controller.php";

        foreach ($data as $info) {
            print_r($info);
        }
        ?>
    </h3>
</body>
</html>