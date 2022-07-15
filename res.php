<?php
      //表單使用post方式傳送過來
      $acc = $_POST['user'];
      $password = $_POST['pwd'];

      if ($acc == "lcc" && $password == "12345678"){
          echo "登入成功！";
      }else{
          echo "帳密失敗";
      }

?>