<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 8</title>
</head>

<body>
    <h3>Tính tổ hợp chập k của N phần tử</h3>

    <?php
    if (file_exists('inputBai8.txt')) {
        $fileRead = fopen('inputBai8.txt', 'r');
        if (!$fileRead) {
            echo "Mở tệp lỗi!";
        } else {
            $data = [];
            $index = 0;
            while (!feof($fileRead)) {
                $line = fgets($fileRead);
                if (!empty($line))
                {
                    $data[$index++] = explode( ' ', $line);
                }
            }
            fclose($fileRead);


            foreach ($data[0] as $key => $number) {
                if ($key == 0) {
                    $a = $number;
                } elseif ($key == 1) {
                    $b = $number;
                }
            }
        }
    }
    ?>

    <?php

    if (isset($_POST['submit'])) 
    {
        $a = $_POST['a'];
        $b = $_POST['b'];

        require_once "OOP8.php";
        $object = new OOP8($a, $b);
        $rs = $object->Tinh();

        $fileWrite = fopen('outputBai8.txt', 'w+');
        if (!$fileWrite) {
            echo "Ghi tệp lỗi!";
        }
        else
        {
            fwrite($fileWrite, $rs);
        }
        fclose($fileWrite);
    }
    ?>
    <form action="" method="post">
        <div class="from-group">
            <label for="n">Nhập N</label>
            <input value="<?php if (isset($a)) echo $a ?>" type="text" name="a" id="a" class="form-control">
        </div>
        <div class="from-group">
            <label for="n">Nhập K</label>
            <input value="<?php if (isset($b)) echo $b ?>" type="text" name="b" id="b" class="form-control">
        </div>
        <input type="submit" name="submit" value="Tính">
    </form>
    <div><?php if (isset($rs)) echo 'Kết quả :<br>' . $rs ?></div>
</body>

</html>