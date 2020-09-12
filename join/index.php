<?php
session_start();

if (!empty($_POST)) {
	if ($_POST['name'] === "") {
		$error['name'] = 'blank';
	}
	if ($_POST['password'] === "") {
		$error['password'] = 'blank';
	}

	if (empty($error)) {
		$_SESSION['join'] = $_POST;
		header('Location: check.php');
	}
};
  if ($_REQUEST['action']=='rewrite') {
		$_POST = $_SESSION['join'];
	}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>会員登録</title>
	<link rel="stylesheet" href="../style.css" />
  <body>
		<form action="", method="post", nctype="multipart/form-data">
			<input type='text', name="name", value="<?php echo $_POST['name'] ?>"><br>
				<?php if ($error['name'] === 'blank') {
					echo '名前いれろ<br>';
				}
				?>
			<input type='password', name='password', value="<?php echo $_POST['password'] ?>"><br>
			<?php if ($error['password'] === 'blank') : ?>
        パスいれろ<br>
			<?php endif ?>
			<input type='submit', value='submit'><br>
		</form>

  </body>
<?php var_dump($error); ?>
</html>