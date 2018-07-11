<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add data</title>
</head>
<body>
<h2>Add Category</h2>
<?php
if(isset($msg)){
    echo "<span style='color: blue;font-weight: bold'>".$msg."</span>";
}
?>
<form action="http://localhost/mvc/Index/insertCategory" method="post">
    <table>
        <tr>
            <td>Category Name:</td>
            <td><input type="text" name="name" required="1"></td>
        </tr>
        <tr>
            <td>Category Title:</td>
            <td><input type="text" name="title" required="1"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" required="1"></td>
        </tr>
    </table>
</form>
</body>
</html>