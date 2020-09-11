<?php
if ($_POST['name'] === "") {
	$error['name'] = 'blank';
}
if ($_POST['password'] === "") {
	$error['password'] = 'blank';
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
			<input type='text', name="name", value=""><br>
				<?php if ($error['name'] === 'blank') {
					echo '名前いれろ<br>';
				}
				?>
			<input type='password', name='password', value=""><br>
			<?php if ($error['password'] === 'blank') : ?>
        パスいれろ<br>
			<?php endif ?>
			<input type='submit', value='submit'><br>
		</form>

  </body>
</html>