<?php
ini_set("log_errors", "on");
ini_set("error_log", "/Applications/MAMP/htdocs/mini_bbs_practice/join/watch_log.log");
// error_log(print_r($_FILES, true));

session_start();

if (!empty($_POST)) {
	if ($_POST['name'] === "") {
		$error['name'] = 'blank';
	}
	if ($_POST['password'] === "") {
		$error['password'] = 'blank';
	}

	if (empty($error)) {
		if ($_FILES['image']['name'] !=='') {
			$image = date('YmdHis') . $_FILES['image']['name'];			
			move_uploaded_file($_FILES['image']['tmp_name'],'../member_picture/' .$image);
			$_SESSION['join']['image'] = $image;
			$_SESSION['on_picture'] = 'yes';
		} else {
			$_SESSION['join']['image'] = '';
			$_SESSION['on_picture'] = 'no';
		}
		$_SESSION['join'] = $_POST;
		$_SESSION['join']['image'] = $image;
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
	<form action="" method="post" enctype="multipart/form-data">
			<input type='text', name="name", value="<?php echo $_POST['name'] ?>"><br>
				<?php if ($error['name'] === 'blank') {
					echo '名前いれろ<br>';}
				?>
			<input type='password', name='password', value="<?php echo $_POST['password'] ?>"><br>
			<?php if ($error['password'] === 'blank') : ?>
        パスいれろ<br>
			<?php endif ?>
			<input type='file' name='image' size='35' value='test'>

			<input type='submit', value='submit'><br>
		</form>

  </body>

</html>
