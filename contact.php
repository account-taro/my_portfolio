<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>MY_PORTFOLIO</title>
</head>
<body>
  <h3 class="h3">ご入力した内容</h3>
    <?php
      $next=0;
      $name=$_POST['name'];
      $subject=$_POST['subject'];
      $mail=$_POST['mail'];
      $message=$_POST['message'];

      $name=htmlspecialchars($name,ENT_QUOTES,'UTF-8');
      $subject=htmlspecialchars($subject,ENT_QUOTES,'UTF-8');
      $mail=htmlspecialchars($mail,ENT_QUOTES,'UTF-8');
      $message=htmlspecialchars($message,ENT_QUOTES,'UTF-8');

      print '<section class="input_data">';
        print '<div class="title">お名前</div>';
        if($name==''){
          print '<div class="data ng">※お名前を入力してください※</div>';
        }else{
          print '<div class="data">'.$name.' 様</div>';
          $next++;
        }
        print '</div>';

        print '<div class="title">件名</div>';
        if($subject==''){
          print '<div class="data ng">※件名を入力してください※</div>';
        }else{
          print '<div class="data">'.$subject.'</div>';
          $next++;
        }
        print '</div>';


        print '<div class="title">ご連絡先のメールアドレス</div>';
        if($mail==''){
          print '<div class="data ng">※ご連絡先のメールアドレスを入力してください※</div>';
        }else{
          print '<div class="data">'.$mail.' </div>';
          $next++;
        }
        print '</div>';

        print '<div class="title">お問い合わせ内容</div>';
        if($message==''){
          print '<div class="data ng">※お問い合わせ内容を入力してください※</div>';
        }else{
          print '<div class="data">'.$message.' </div>';
          $next++;
        }
        print '</div>';
      print '</section>';
      print '<section class="form">';
      if($next==4){
        print '<br>';
        print '<P class="confirmation">お問い合わせ内容はこれでよろしいですか?</p>';
        print '<form method="post" action="send.php" class="form_1">';
        print '<input type="hidden" name="name" value="'.$name.'">';
        print '<input type="hidden" name="subject" value="'.$subject.'">';
        print '<input type="hidden" name="mail" value="'.$mail.'">';
        print '<input type="hidden" name="message" value="'.$message.'">';
        print '<div class="btn_container">';
        print '<input class="btn" type="submit" value="送信">';
        print '<input class="btn" type="button" onclick="history.back()" value="戻る">';
        print '</div>';
        print '</form>';

      }else{
        print '<div class="btn_container">';
        print '<input class="btn" type="button" onclick="history.back()" value="戻る">';
        print '</div>';
        }
      print '</section>';
    ?>
</body>
</html>