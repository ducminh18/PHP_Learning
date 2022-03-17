<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
</head>

<body>
<h3>Giải PT bậc nhất ax + b = 0</h3>

<?php
    require('BacNhat.php');
    if (isset($_POST['submit'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];

        $pt = new BacNhat($a, $b);
        $rs = $pt->Giai();
    }
?>
<form action="" method="post">
    <pre class="m-3"><span>1: </span><input name="a" type="number" value="<?php if (isset($a)) echo $a ?>">X + <input name="b" value="<?php if (isset($b)) echo $b ?>" type="number"> = 0
    <input type="submit" value="Giải PT" name="submit">
</form>
<div><?php if (isset($rs)) echo 'Kết quả :<br>' . $rs ?></div>
</body>

</html>