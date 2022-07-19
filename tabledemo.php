<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 90%;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <th>姓名</th>
            <th>年齡</th>
            <th>學校</th>
        </tr>
        <?php
            for($i = 0; $i <= 10; $i++){
        ?>
            <tr>
                <td>阿剛</td>
                <td>30</td>
                <td>台東大學</td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>