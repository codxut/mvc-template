<?php 
	/* En el archivo helpers, va las funciones que serán de ayuda durante el proceso de codificación. */

	function baseUrl()
	{
		return BASE_URL;
	}

	function formatArr(array $arr)
	{
		$format = print_r("<pre>");
		$format .= print_r($arr);
		$format .= print_r("</pre>");
		return $format;
	}

	function strClean(string $cadena)
	{
		$string = preg_replace(['/\s+/','/^\s|\s$/'], [' ', ''], $cadena); //elimina los espacio entre palabras
		$string = trim($string); //elimina espacios del inicio y final
		$string = stripslashes($string); //elimina las barras invertidas
		$string = str_ireplace("<script>", "", $string); //limpia las palabras inadecuadas
		$string = str_ireplace("</script>", "", $string);
		$string = str_ireplace("<script src>", "", $string);
		$string = str_ireplace("<script type>", "", $string);
		$string = str_ireplace("SELECT * FROM", "", $string);
		$string = str_ireplace("DELETE FROM", "", $string);
		$string = str_ireplace("INSERT INTO", "", $string);
		$string = str_ireplace("SELECT COUNT(*) FROM", "", $string);
		$string = str_ireplace("DROP TABLE", "", $string);
		$string = str_ireplace("OR '1'='1'", "", $string);
		$string = str_ireplace('OR "1" = "1"', "", $string);
		$string = str_ireplace("is NULL; --", "", $string);
		$string = str_ireplace("LIKE '", "", $string);
		$string = str_ireplace('LIKE "', "", $string);
		$string = str_ireplace("LIKE `", "", $string);
		$string = str_ireplace("OR 'a'='a'", "", $string);
		$string = str_ireplace('OR "a" = "a"', "", $string);
		$string = str_ireplace('OR `a` = `a`', "", $string);
		$string = str_ireplace("--", "", $string);
		$string = str_ireplace("^", "", $string);
		$string = str_ireplace("[", "", $string);
		$string = str_ireplace("]", "", $string);
		$string = str_ireplace("==", "", $string);
		return $string;
	}

	//se usa para generar contraseñas
	function passwordGenerator(int $length)
	{
		$password = "";
		$string = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$lenString = strlen($string);
		for ($i = 0; $i <= $length; $i++) {
			$position = rand(0, $lenString-1);
			$password .= substr($string, $position, 1);
		}
		return $password;
	}

	function tokenGenerator()
	{
		$r1 = bin2hex(random_bytes(10));
		$r2 = bin2hex(random_bytes(10));
		$r3 = bin2hex(random_bytes(10));
		$r4 = bin2hex(random_bytes(10));
		$token = "$r1-$r2-$r3-$r4";
		return $token;
	}

	function formatMoney($cantidad)
	{
		return SMONEY.number_format($cantidad, 2, SPD, SPM);
	}
?>