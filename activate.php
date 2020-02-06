<?php
if ($_POST['key']!= '') {

$myfile = fopen("inc/key.txt", "w") or die("Unable to open file!");
$txt = $_POST['key'];
fwrite($myfile, $txt);
fclose($myfile);

Echo "<center><h1>Your key has been updated</h1></center>";
}
else {
	echo '
	<form method="post">
		<input type="text" name="key" placeholder="Please Enter your activation Key Here ">
		<input type="submit" name="">Activate
	</form>
';
}
?>