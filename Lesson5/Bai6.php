<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 6</title>
</head>

<body>
    <h3>Tìm số các số hoàn hảo</h3>
    
    <?php
    require('./Number.php');
    if (isset($_POST['n']) && is_numeric($_POST['n'])) 
    {
        $cls = new WorkWithNumber($_POST['n']);
        $arr = $cls->SoHoanHao();
        $rs = 'Các số hoàn hảo trong khoảng từ 1 đến '.$cls->n.' : ';
        foreach ($arr as $key => $value) {
            $rs .= $value.', ';
        }
        $rs = trim($rs, ', ');
    }
    ?>
    <form action="" method="post">
        <div class="from-group">
            <label for="n">Nhập N</label>
            <input value="<?php if (isset($cls->n)) echo $cls->n ?>" type="text" name="n" id="n" class="form-control">
        </div>
        <input type="submit" class='m-3 btn btn-outline-primary' value="Tìm">
    </form>
    <div><?php if (isset($rs)) echo 'Kết quả :<br>' . $rs ?></div>
</body>

</html>