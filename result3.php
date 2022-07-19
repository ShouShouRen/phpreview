<?php
    if(isset($_POST['username'])){
        // isset 判斷變數是否已存在有就回傳true
        $user = $_POST['username'];
        $sex = $_POST['sex'];
        $edu = $_POST['edu'];

        switch($sex){
            case 'F':
                echo $user . "妳好！！！<br>";
                echo "我是女生<br>";
                break;
            case 'M':
                echo $user . "你好！！！<br>";
                echo "我是男生<br>";
                break;
            case 'No':
                echo $user . "好！！！<br>";
                echo "我的性別要你管？";
                break;
        }
        if($edu == "高中"){
            echo "我是高中生<br>";
        }else if($edu == "大學"){
            echo "我是大學生";
        }else if($edu == "碩士"){
            echo "我是碩士<br>";
        }else{
            echo "我是博士<br>";
        }
    }
?>