<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>確認</title>
	<link rel="stylesheet" href="../style.css" />
  <body>
  <pre>
<?php
echo "name:".$_SESSION['join']['name']."<br>";
echo "password:".$_SESSION['join']['password']."<br>";
echo "<a href='index.php?action=rewrite'>戻る</a>";
?>

  </body>
  --------debug---------<br>
  <?php
  var_dump($_SESSION['join']);
  echo var_dump($_POST);
  ?>
  </pre>
</html>