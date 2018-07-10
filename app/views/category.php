<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>category</title>
</head>
<body>
<h2>Category List</h2> <hr>
<?php
foreach ($cat as $key){
    echo $key['catOne']."<br>";
    echo $key['catTwo']."<br>";
    echo $key['catThree']."<br>";
}
?>
</body>
</html>