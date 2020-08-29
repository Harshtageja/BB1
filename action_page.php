<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$conn=new mysqli("localhost","root","bbtrucks","truck");
	$sql="insert into feedback(FirstName,LastName,country,feedback)values('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['country']."','".$_POST['subject']."')";
	$conn->query($sql);
	?>
	<form name="feedback" action="pr2-4.php" method="post">
		<input type="text" name="Email" style="display: none;" value="<?php echo $_POST['Email'] ?>">
		
	</form>
	<script type="text/javascript">
		document.forms['feedback'].submit();
	</script>

</body>
</html>