<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  $name = $_POST["name"];
  $prefectures = $_POST["prefectures"];
  $email = $_POST["email"]; 
  $tel = $_POST["tel"]; 
} else { 
  header("Location: contact.php"); 
} 
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <?php include '../php/header.php';?>

  <section class="confirm">
    <h2>お問い合わせ内容確認</h2>
    <table>
      <tr><th>名前</th><td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td></tr>
      <tr><th>席希望</th><td><?php echo htmlspecialchars($prefectures, ENT_QUOTES, 'UTF-8'); ?></td></tr>
      <tr><th>メールアドレス</th><td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></td></tr>
      <tr><th>電話番号</th><td><?php echo htmlspecialchars($tel, ENT_QUOTES, 'UTF-8'); ?></td></tr>
    </table>

    <form method="post" action="./thanks.php">
      <input type="hidden" name="name" value="<?php echo $name; ?>">
      <input type="hidden" name="email" value="<?php echo $email; ?>">
      <input type="hidden" name="prefectures" value="<?php echo $prefectures; ?>">
      <div class="button_flex">
        <button type="button" onclick="history.back()">戻る</button>
        <input type="submit" value="送信">
      </div>
    </form>
  </section>

  <?php include '../php/footer.php';?>
</body>
</html>