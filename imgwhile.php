<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .dinsoaur{
            padding: 0;
            margin: 0;
            float: left;
            /* width: 23%;
            display: flex;
            flex-wrap: wrap; */
        }
        .dinsoaur img{
            width: 100%;
        }
    </style>
</head>
<body>
    <?php
        $i = 0;
        while($i < 10){
    ?>
    <div class="dinsoaur">
        <img src="https://picsum.photos/id/45/400/300" alt="">
        <p>我是圖片</p>
    </div>
    <?php
        $i++;
        }
    ?>
</body>
</html>