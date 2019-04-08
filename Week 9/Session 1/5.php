<?php
	if(isset($_POST["name"]) || isset($_POST["age"]))
	{
		echo "Welcome ".$_POST["name"]."<br/>";
		echo "You are ".$_POST["age"]." years old.";
		exit();
	}
?>
<HTML>
	<BODY>
		<FORM ACTION="<?php $_PHP_SELF?>" METHOD="POST">
			Name:<input type = "text" name="name"/><br/>
			Age:<input type = "number" name="age"/><br/>
			<input type="submit"/>
		</FORM>
	</BODY>
<HTML>
