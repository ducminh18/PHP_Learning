<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>MANDOSHOP</title>
</head>
<style>
    h1{
        margin-top :1cm;
        text-align: center;
    }
    table{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin-top :1cm;
    }
    tbody, td, tfoot, th, thead, tr {

    border-color: lightgray;
    border-style: solid;
    border-width: 1.5px;
    width: 13.5cm;
    height: 4cm;
    text-align: center;
    /* font-size: 110%; */
}
tr.menu_table {
    background-color: orange;
    color: white;
    border: none;
    /* font-size: 135%; */
}
img {
    /* max-width: 2cm; */
    height: 3cm;
    width: 4cm;
    border-radius: 7px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
p {
    margin-top: 0;
    margin-bottom: 1rem;
    text-align: start;
    margin-left: 10px;
}
</style>

<body>
    <?php
    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "demo";
    $db = new mysqli($host, $username, $password, $database);
    $result = $db->query("SELECT * FROM `san_pham`");

?>



<table>
    <thead>
        <tr class ="menu_table">
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Ảnh</th>
            <th>Mô tả</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $tt =1;
        while($r = mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?=$tt++?></td>
                <td><?=$r['name']?></td>
                <td><?=number_format($r['unit_price'])?> đ</td>
                
                <td><img src="upload/sanpham/<?=$r['image']?>" alt=""></td>
                <td><?=$r['mota_sp']?></td>

            </tr>
            <?php
        }
        mysqli_close($db);
         ?>
    </tbody>
</table>
</body>
</html>