<?php
ini_set("log_errors", "on");
ini_set("error_log", "/Applications/MAMP/htdocs/mini_bbs_practice/join/watch_log.log");
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
?>

<?php if ($_SESSION['on_picture'] === 'yes') : ?>
	<img src="../member_picture/<?php print($_SESSION['join']['image']); ?>" width="100" height="100" alt="">
<?php endif; ?>
echo "<a href='index.php?action=rewrite'>戻る</a>";


  </body>
</html>
<pre>
<?php
echo "<br>============debug=================<br>";
echo "<br>---------------【SESSION】--------------------<br>";
print_r($_SESSION);
// session_destroy();
// $_SESSION = array();
?>
</pre>
