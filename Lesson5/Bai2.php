<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
</head>

<body>
<h3>Giải PT bậc hai</h3>

<?php
require('BacHai.php');
if (isset($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    // $delta = pow($b, 2) - 4 * $a * $c;

    // if ($delta < 0)
    // {
    //     $rs = 'Phương trình có nghiệm phức';
    // }
    // elseif ($delta == 0)
    // {
    //     $rs = 'Phương trình có nghiệm kép x1 = x2 = ' . (-$b/(2*$a));
    // }
    // elseif ($delta > 0)
    // {
    //     $x1 = (-$b + sqrt($delta)) / (2 * $a);
    //     $x2 = (-$b - sqrt($delta)) / (2 * $a);
    //     $rs = 'Phương trình có 2 nghiệm x1= ' . $x1 . ', x2 = ' . $x2;
    // }
    $pt = new BacHai($a, $b, $c);
    $rs = $pt ->giaiPhuongTrinh();

    $fileWrite = fopen('outputBai2.txt', 'w+');
    if (!$fileWrite) {
        echo "Open file to write error!";
    } else {
        fwrite($fileWrite, $rs);
    }
    fclose($fileWrite);


}
?>
<form action="" method="post">
    <pre class="m-3"><span>1: </span><input name="a" type="number" value="<?php if (isset($a)) echo $a ?>">X<sup>2</sup> + <input
            name="b" value="<?php if (isset($b)) echo $b ?>" type="number">X + <input
            name="c" value="<?php if (isset($c)) echo $c ?>" type="number"> = 0
    <input type="submit" value="Giải PT" name="submit">
</form>
<div><?php if (isset($rs)) echo 'Kết quả :<br>' . $rs ?></div>
</body>

</html>