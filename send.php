<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>送信完了しました</title>
</head>
<body>
  <section class="send_box">
    <div class="send_img"><img src="img/send_icon.png" alt="紙飛行機"></div>
    <div class="send_message">送信されました</div>
  </section>
  <div class="return_top">
    <button><a href="main.html">トップへ</a></button>
  </div>
  <?php
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $mail=$_POST['mail'];
    $message=$_POST['message'];
    
    $name=htmlspecialchars($name,ENT_QUOTES,'UTF-8');
    $subject=htmlspecialchars($subject,ENT_QUOTES,'UTF-8');
    $mail=htmlspecialchars($mail,ENT_QUOTES,'UTF-8');
    $message=htmlspecialchars($message,ENT_QUOTES,'UTF-8');

    $honbun.="メッセージを受け取りました。\n";
    $honbun.="追って連絡いたしますので大変申し訳ございませんが今しばらくお待ちください。\n";
    $honbun.="※このメールは自動返送メールです※\n";
    $title='お問い合わせありがとうございます。';
    $header='From:tarosma86@gmail.com';
    $honbun=html_entity_decode($honbun,ENT_QUOTES,'UTF-8');
    mb_language('japanese');
    mb_internal_encoding('UTF-8');
    mb_send_mail($mail,$title,$honbun,$header);

    $honbun2=$message;
    $title2=$subject;
    $header2=$mail;
    mb_send_mail('tarosma86@gmail.com',$title2,$honbun2,$header2);

  ?>
</body>
</html>