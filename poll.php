<?php 
//Simple ajax response handling.
switch ($_SERVER['REQUEST_METHOD']) {
	case 'UPDATE':
	$lastSave = array("last_saved" =>file_get_contents("last_save"));
	echo (json_encode($lastSave));
	exit;
	break;

	case 'POST':
	$time =  $_POST['edit_time'];
	file_put_contents("last_save", $time);
	break;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit page</title>
</head>
<body>
	<p>I'm the edit page</p>
	<form id="edit_form" method="POST" onsubmit="submitForm();">
		<input type="hidden" id="edit_time" name="edit_time">
		<input type="submit" value="Press me to update stuff" />
	</form>
<script type="text/javascript">
//stub code to set timestamp when pressing zhe button
	
	function submitForm(){
		//Get the current timestamp
		var now = Math.round(new Date().getTime()/1000.0);
		document.querySelector("#edit_time").value = now;
		return true;
	};
</script>
</body>
</html>