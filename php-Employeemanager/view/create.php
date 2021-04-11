<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lý nhân sự </title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<form method="post" action="">
    <fieldset>
        <legend>Employee manager </legend>
        <label for="lastName">Họ:</label>
        <input type="text" id="lastName" name="lastName" required=""> <br>
        <label for="firstName">Tên:</label>
        <input type="text" id="firstName" name="firstName" required=""> <br>
        <label for="firstName">Tên:</label>
        <input type="text" id="firstName" name="firstName" required=""> <br>
        <label for="dateOfBirth">Ngày sinh:</label>
        <input type="date" id="dateOfBirth" name="dateOfBirth" required=""> <br>
        <label for="address">Địa chỉ:</label>
        <input type="text" id="address" name="address" required=""> <br>
        <label for="position">Vị trí:</label>
        <input type="text" id="position" name="position" required=""> <br>
        <input type="submit" id="add" name="add" value="Thêm">
        <input type="submit" id="edit" name="edit" value="Sửa">
        <input type="submit" id="delete" name="delete" value="Xóa">

    </fieldset>

</form>


</body>
</html>
