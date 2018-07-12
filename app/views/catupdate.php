<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update data</title>
</head>
<body>
<h2>Update Category</h2>
<?php
if(isset($msg)){
   echo "<span style='color: blue;font-weight: bold'>".$msg."</span>";
}
?>
<form action="http://localhost/mvc/Category/updateCat" method="post">
    <table>
        <?php
        if(isset($catById)){
        foreach ($catById as $value){
        ?>
            <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
        <tr>
            <td>Category Name:</td>
            <td><input type="text" name="name" value="<?php echo $value['name'] ?>"></td>
        </tr>
        <tr>
            <td>Category Title:</td>
            <td><input type="text" name="title" value="<?php echo $value['title'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Update"></td>
        </tr>
        <?php }
        } ?>
    </table>
</form>
</body>
</html>