<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" medthod="post">
        年齡：<input type="text" name="age"><br>
        <input type="submit">
    </form>
    <?php
        if(!empty($_POST["age"])){
            $age = $_POST["age"];
            if($age >= 20){
                echo "已成年";
            }else{
                echo "未成年";
            }
        }
    ?>
</body>
</html>