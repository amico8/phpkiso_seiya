<?php
  // 入力内容をそれぞれ変数に入れる
  $nickname = $_POST['nickname'];
  $email = $_POST['email'];
  $content = $_POST['content'];
  if ($nickname == '' || $email == '' || $content == '') {
    echo '入力されていない項目があります';
  }else{
   echo "ようこそ ".$nickname.'様'.'<br>';
   echo "メールアドレス:".$email."です".'<br>';
   echo "ご意見".'「'.$content.'」';
 }

#echo '<br>'.'<a href=index.html>戻る</a>';
echo '<form>';
echo '<input type="button" onclick="history.back()" value="戻る">';
echo "</form>";


 ?>
