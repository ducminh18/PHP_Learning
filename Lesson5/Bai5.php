<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 5</title>
</head>

<body>
    <h3>Tìm số Fibonaci</h3>

    <?php

    if (isset($_POST['n']) && is_numeric($_POST['n'])) 
    {
        $n = $_POST['n'];
        // if ($n >= 0)
        // {
        //     $rs = "Số fibonaci thứ ".$n.' = '.fibonaci($n);
        // }
        // else
        // {
        //     $rs = 'Hãy nhập một số nguyên dương!';
        // }
        // if (!is_numeric($_POST['n']))
        // {
        //     $rs = 'Hãy nhập một số nguyên dương!';
        // }

        require_once "OOP5.php";
        $object = new OOP5($n);
        $rs = $object->Tinh();
    }
    ?>
    <form action="" method="post">
        <div class="from-group">
            <label for="n">Nhập N</label>
            <input value="<?php if (isset($n)) echo $n ?>" type="text" name="n" id="n" class="form-control">
        </div>
        <input type="submit" class='m-3 btn btn-outline-primary' value="Tìm">
    </form>
    <div><?php if (isset($rs)) echo 'Kết quả :<br>' . $rs ?></div>
</body>

</html>