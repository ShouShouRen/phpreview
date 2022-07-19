<?php
    if(isset($_POST['username'])){
        // isset 判斷變數是否已存在有就回傳true
        $user = $_POST['username'];
        $sex = $_POST['sex'];
        $edu = $_POST['edu'];

        switch($sex){
            case 'F':
                echo $user . "妳好！！！<br>";
                echo "送你一頂小花帽帽！！！<br>";
                break;
            case 'M':
                echo $user . "你好！！！<br>";
                echo "送你一件Ｔ Shirt<br>";
                break;
            case 'No':
                echo $user . "好！！！<br>";
                echo "送你一個熱氣球小禮物";
                break;
        }
        if($edu == "高中"){
            echo "可以再進修大學<br>";
        }else if($edu == "大學"){
            echo "這個稱為學士";
        }else if($edu == "碩士"){
            echo "聽說最近論文很火<br>";
        }else{
            echo "超厲害喔！！！<br>";
        }
    }
?>