<!DOCTYPE html>

<html lang="pt-br">

	<header>
	<title>Convert decimal / binário</title>
	</header>
	
	<body>
	
	<form action="<?php echo $_SERVER ['PHP_SELF']?>" method="post">
	
		<label for='decimal'>Digite o número decimal: </label>
		<input type="text" name="decimal">
		</br></br>
		<input type="submit" name="calc_bin" value="Calcular">
		</br><hr>

<?php

	if($_POST['calc_bin']){
	
		require_once 'calcula.php';
		
		$var = $_POST['decimal'];
		echo '</br><label for="ret">O valor binário é: </label>
		<input type="text" name="ret" value="'.deci_bin($var).'">';
		unset($_POST);
		
	
	}

?>
	
	</form>
	
	</body>

</html>
